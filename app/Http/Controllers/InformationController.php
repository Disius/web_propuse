<?php

namespace App\Http\Controllers;

use App\Models\EmpresaNaercris;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InformationController extends Controller
{
    public function QuienesSomos(){
        $empresa = EmpresaNaercris::getEmpresa();
        return Inertia::render('corporativoinformacion/QuienesSomos', [
            'quienessomos' => $empresa[0]->quienesSomos
        ]);
    }
    public function misionVision(){
        $empresa = EmpresaNaercris::getEmpresa();
        return Inertia::render('corporativoinformacion/misionVision', [
            'mision' => $empresa[0]->mision,
            'vision' => $empresa[0]->vision,
        ]);
    }
    public function nuestraHistoria(){
        $empresa = EmpresaNaercris::getEmpresa();
        return Inertia::render('corporativoinformacion/Historia', [
            'historia' => $empresa[0]->historia,
        ]);
    }

    public function valores(){
        $empresa = EmpresaNaercris::getEmpresa();
        return Inertia::render('corporativoinformacion/Valores', [
            'valores' => $empresa[0]->valores,
        ]);
    }

    public function equipo(){
        return Inertia::render('corporativoinformacion/EquipoDeTrabajo', [
//            'valores' => $empresa[0]->valores,
        ]);
    }
}
