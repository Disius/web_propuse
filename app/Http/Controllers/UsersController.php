<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UsersController extends Controller
{
    public function users_view(){
         if (! Gate::allows('view-users', auth()->user())) {
            abort(403, 'Tu usuario no puede acceder a este recurso');
        }

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
        if (! Gate::allows('view-permisos', auth()->user())) {
            abort(403, 'Tu usuario no puede acceder a este recurso');
        }
        return Inertia::render('configuracion/usuarios/permisos/Permisos');
    }
}
