<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UsersController extends Controller
{
    public function users_view(){
        $users =  User::where('id', '!=', auth()->user()->id) != null ? User::where('id', '!=', auth()->user()->id)
        ->with('permissions', 'roles')
        ->get() : null;

        return Inertia::render('configuracion/usuarios/UsersAdmin', [
            'usuarios' => $users,
        ]);
    }

    public function edit_users(){
        return Inertia::render('configuracion/usuarios/crud/EditUsers');
    }



//    permisos
    public function permisos(){
        return Inertia::render('configuracion/usuarios/permisos/Permisos');
    }
}
