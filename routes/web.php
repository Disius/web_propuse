<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [Controller::class, 'welcome'])->name('main');

Route::get('/dashboard', function () {
    $user = auth()->user();
    return Inertia::render('Dashboard', [
        'acceder_usuarios' => $user->hasPermissionTo('acceso usuarios'),
        'vacantes' => $user->hasPermissionTo('acceso vacante')
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
require __DIR__.'/configuracion.php';
require __DIR__.'/information.php';
