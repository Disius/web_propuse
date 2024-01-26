<?php

use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VacanteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::prefix('configuracion')->group(function (){
    Route::get('/inicio', [ConfigurationController::class, 'configuration'])->name('config.main');
    Route::post('/guardar/empresa', [ConfigurationController::class, 'create_empresa'])->name('create.empresa');
    Route::post('/editar/empresa/{id}', [ConfigurationController::class, 'update_empresa'])->name('update.empresa');

//    users administrarion
    Route::get('/users', [UsersController::class, 'users_view'])->name('users.view');
    Route::get('/editar-usuarios', [UsersController::class, 'edit_users'])->name('editar.usuarios');

    //permisos
    Route::get('/permisos', [UsersController::class, 'permisos'])->name('permisos.all');
    //vacantes
    Route::resource('vacante', VacanteController::class);
});
