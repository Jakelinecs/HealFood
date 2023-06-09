<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//agregamos 
use App\Http\Controllers\Controller;
use App\Models\User;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;



class UsuarioController extends Controller
{

      /**
       * Constructor
      */

    function _construct(){
        $this->middleware('permission:ver-user|crear-user|editar-user|borrar-user', ['only'=>['index']]);
        $this->middleware('permission:crear-user', ['only'=>['create','store']]);
        $this->middleware('permission:editar-user', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-user', ['only'=>['destroy']]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = User::paginate(10);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'name')->all();
        return view('usuarios.crear',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|same:confirm-password',
            'estilo'=> 'nullable',
            'fuente'=> 'nullable',
            'roles'=> 'required'
        ]);

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user =User::create($input);
        $user ->assignRole($request->input('roles'));


        return redirect()->route('usuarios.index');
    }








    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('usuarios.editar', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email,'.$id,
            'password'=> 'same:confirm-password',
            'estilo'=> 'nullable',
            'fuente'=> 'nullable',
            'roles'=> 'required'
        ]);
    
            $input = $request->all();
            if(empty($input['password'])){
                $input['password'] = Hash::make($input['password']);
            }else{
                $input = Arr::except($input, array('password'));
            }
    
            $user =User::find($id);
            $user -> update($input);
            DB::table('model_has_roles')->where('model_id',$id)->delete();
    
            $user -> assignRole($request->input('roles'));



            return redirect()->route('usuarios.index');
    }

    public function editProfileForm(Request $request)
    {
        
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'=> 'required'
        ]);    

            $imageName = time().'.'.$request->photo->extension();

            $image='img/perfil/'.Auth::user()->id.'/'.$imageName; 
                
            $request->photo->move(public_path('img/perfil/'.Auth::user()->id), $imageName);

            $usuario = User::find(Auth::user()->id);
            $usuario->name = $request['name'];
            $usuario->fuente = $image;
            $usuario->save();
            return back();
        }


        public function changePasswordForm(Request $request)
        {
            # Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);


            #Match The Old Password
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }

            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            Auth::logout();

            return back()->with("status", "Password changed successfully!");
        }
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        User::find($id)->delete();



        return redirect()->route('usuarios.index');
    }


    public function light()
    {
        $usuario = User::find(Auth::user()->id);
        $usuario->estilo = 'white';
        $usuario->save();
        return back();
    }

    public function normal()
    {
        $usuario = User::find(Auth::user()->id);
        $usuario->estilo = 'normal';
        $usuario->save();
        return back();
    }

    public function dark()
    {
        $usuario = User::find(Auth::user()->id);
        $usuario->estilo = 'dark';
        $usuario->save();
        return back();
    }

}
