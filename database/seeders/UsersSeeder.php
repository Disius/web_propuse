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
            'usuarios_access',
            'create empresa',
            'edit empresa',
            'update empresa',
            'create usuarios',
            'edit usuarios',
            'update usuarios',
            'delete usuarios',
            'create permiso',
            'edit permiso',
            'update permiso',
            'delete permiso',
            'create roles',
            'edit roles',
            'update roles',
            'delete roles',
        ]);

        $rh_user = User::create([
            'email' => 'rh@naercris.com.mx',
            'password' => Hash::make('recursos123'),
        ]);
        $rh_user->assignRole('RH');
        $rh_user->givePermissionTo([
            'index vacante',
            'create vacante',
            'show vacante',
            'edit vacante',
            'update vacante',
            'delete vacante',
        ]);
    }
}
