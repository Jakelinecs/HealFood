<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Permission;


class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permisos = [
            
         //tabla de roles
             'ver-rol',
             'crear-rol',
             'editar-rol',
             'borrar-rol',
         //tabla de usuarios
             'ver-user',
             'crear-user',
             'editar-user',
             'borrar-user',
         //tabla de blogs
             'ver-blog',
             'crear-blog',
             'editar-blog',
             'borrar-blog',
         //tabla de blogs
            'ver-persona',
            'crear-persona',
            'editar-persona',
            'borrar-persona',
    ];
 
  
         foreach($permisos as $permiso){
             
             Permission::create(['name'=>$permiso]);
         }
 
     }
}
