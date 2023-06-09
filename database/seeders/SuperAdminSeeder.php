<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creando al super susuario
        $usuario = User::create([
            'name'=>'grupo09 sa',
            'email'=>'grup09@tecnoweb.org',
            'password'=>bcrypt('12345678'),

        ]);

        //reando rol super administrador
        $rol= Role::create(['name'=>'root']);
        //asignando todos los permisos
        $permisos= Permission::pluck('id','id')->all();        
        $rol->syncPermissions($permisos);
        //asignando rol al super usuario
        $usuario->assignRole([$rol->id]);
    }
}
