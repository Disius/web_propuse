<?php

use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\Controller;
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

Route::prefix('configuracion')->group(function (){
    Route::get('/inicio', [ConfigurationController::class, 'configuration'])->name('config.main');
    Route::post('/guardar/empresa', [ConfigurationController::class, 'create_empresa'])->name('create.empresa');
});
