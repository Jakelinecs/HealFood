<?php

use Illuminate\Support\Facades\Route;


//
//agregamos los controladores 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('contact', ContactController::class);

Route::group(['middleware'=> ['auth']], function(){

    


    Route:: resource( 'roles', RolController::class);
    Route:: resource( 'usuarios', UsuarioController::class);
    Route:: resource( 'blogs', BlogController::class);
    Route:: resource( 'personas', PersonaController::class);



    Route::get('estilo/light', [UsuarioController::class, 'light'])->name('estilo.light');
    Route::get('estilo/normal', [UsuarioController::class, 'normal'])->name('estilo.normal');
    Route::get('estilo/dark', [UsuarioController::class, 'dark'])->name('estilo.dark');

    Route::post('usuarios/editProfileForm', [UsuarioController::class, 'editProfileForm'])->name('usuarios.editProfileForm');
    Route::post('usuarios/changePasswordForm', [UsuarioController::class, 'changePasswordForm'])->name('usuarios.changePasswordForm');

});


