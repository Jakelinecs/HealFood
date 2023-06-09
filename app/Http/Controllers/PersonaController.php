<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



//agregamos 
use Carbon\Carbon;
use App\Models\Persona;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{



    
    function _construct(){
        $this->middleware('permission:ver-persona|crear-persona|editar-persona|borrar-persona', ['only'=>['index']]);
        $this->middleware('permission:crear-persona', ['only'=>['create','store']]);
        $this->middleware('permission:editar-persona', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-persona', ['only'=>['destroy']]);
    }

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




     public function index()
     {
         //
         $date = Carbon::now();
         $personas = Persona::paginate(10);
         return view('personas.index', compact('personas','date'));
      }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         return view('personas.crear');
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
             'nombre'=> 'required',
             'app_apm'=> 'required',
             'sexo'=> 'required',
             'f_nacimiento'=> 'required',
             'celular'=> 'nullable',
             'direccion'=> 'required'
         ]);
 
         $input = $request->all();
  
         $persona =Persona::create($input);
 
 
         return redirect()->route('personas.index');
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
 
 
         return view('personas.editar', compact('user', 'roles', 'userRole'));
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
 
 
 
             return redirect()->route('personas.index');
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
 
 
 
         return redirect()->route('personas.index');
     }
 
 

 }
 