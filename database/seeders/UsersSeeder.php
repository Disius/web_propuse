<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminDaniel1'),
        ]);
        $admin->assignRole('administrador');
        $admin->givePermissionTo([
            'crear empresa',
            'editar empresa',
            'actualizar empresa',
            'acceso usuarios',
            'crear usuarios',
            'editar usuarios',
            'actualizar usuarios',
            'borrar usuarios',
            'acceso permisos',
            'crear permiso',
            'editar permiso',
            'actualizar permiso',
            'borrar permiso',
            'acceso roles',
            'crear roles',
            'editar roles',
            'actualizar roles',
            'borrar roles',
        ]);

        $rh_user = User::create([
            'email' => 'rh@naercris.com.mx',
            'password' => Hash::make('recursos123'),
        ]);
        $rh_user->assignRole('RH');
        $rh_user->givePermissionTo([
            'acceso vacante',
            'crear vacante',
            'mostrar vacante',
            'editar vacante',
            'actualizar vacante',
            'borrar vacante',
        ]);
    }
}
