<?php

namespace App\Http\Controllers;

use App\Models\EmpresaNaercris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ConfigurationController extends Controller
{
    public function configuration(): \Inertia\Response
    {
        return Inertia::render('configuracion/Configuration', [
            'empresa' => EmpresaNaercris::getEmpresa(),
        ]);
    }
    public function create_empresa(Request $request){
        $request->validate([
            'quienesSomos' => 'required',
            'mision' => 'required',
            'vision' => 'required',
            'valores' => 'required',
            'historia' => 'required',
        ]);
        try {
            DB::beginTransaction();
            EmpresaNaercris::createEmpresa($request);
            DB::commit();
            return Redirect::route('config.main');

        } catch (\Exception $exception){
            return back()->withErrors('Registro no creado, el error es:'.$exception->getMessage());
        }
    }
    public function update_empresa(Request $request, $id){
        $request->validate([
            'quienesSomos' => 'required',
            'mision' => 'required',
            'vision' => 'required',
            'valores' => 'required',
            'historia' => 'required',
        ]);
        try {
            DB::beginTransaction();
            EmpresaNaercris::updateEmpresa($request, $id);
            DB::commit();
            return Redirect::route('config.main');
        } catch (\Exception $exception){
            return back()->withErrors('Registro no creado, el error es:'.$exception->getMessage());
        }
    }
}
