<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //permisos de vacante
        Permission::create(['name' => 'Todas las vacante']);
        Permission::create(['name' => 'crear vacantes']);
        Permission::create(['name' => 'mostrar vacante']);
        Permission::create(['name' => 'editar vacante']);
        Permission::create(['name' => 'actualizar vacante']);
        Permission::create(['name' => 'borrar vacante']);
        //permisos de configuracion
        Permission::create(['name' => 'crear empresa']);
        Permission::create(['name' => 'editar empresa']);
        Permission::create(['name' => 'actualizar empresa']);
        //usuarios
        Permission::create(['name' => 'acceso usuarios']);
        Permission::create(['name' => 'crear usuarios']);
        Permission::create(['name' => 'editar usuarios']);
        Permission::create(['name' => 'actualizar usuarios']);
        Permission::create(['name' => 'borrar usuarios']);
        //permisos
        Permission::create(['name' => 'crear permiso']);
        Permission::create(['name' => 'editar permiso']);
        Permission::create(['name' => 'actualizar permiso']);
        Permission::create(['name' => 'borrar permiso']);
        //roles
        Permission::create(['name' => 'crear roles']);
        Permission::create(['name' => 'editar roles']);
        Permission::create(['name' => 'actualizar roles']);
        Permission::create(['name' => 'borrar roles']);


    }
}
