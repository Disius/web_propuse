<?php

use App\Http\Controllers\ConfigurationController;
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

Route::prefix('informacion')->group(function (){
    Route::get('/quienes-somos', [InformationController::class, 'QuienesSomos'])->name('quienes.somos');
    Route::get('/mision-vision', [InformationController::class, 'misionVision'])->name('mision.vision');
    Route::get('/nuestra-historia', [InformationController::class, 'nuestraHistoria'])->name('nuestra.historia');
    Route::get('/valores', [InformationController::class, 'valores'])->name('nuestros.valores');
    Route::get('/equipo-trabajo', [InformationController::class, 'equipo'])->name('equipo.trabajo');
    Route::get('/empresas', [InformationController::class, 'empresas'])->name('index.empresas');
    Route::get('/contacto', [InformationController::class, 'contacto'])->name('informacion.contacto');
    Route::get('/trabajo', [InformationController::class, 'bolsa'])->name('bolsa.trabajo');
});
