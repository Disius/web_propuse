<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaNaercris extends Model
{
    use HasFactory;

    protected $table = 'empresa_naercris';

    protected $fillable = [
      'quienesSomos', 'mision', 'vision', 'valores', 'historia'
    ];
    public static function getEmpresa(){
        return EmpresaNaercris::latest('id')->get();
    }
    public static function createEmpresa($request){
        $empresa = EmpresaNaercris::create($request->all());
        $empresa->save();
        return $empresa;
    }
    public static function updateEmpresa($request, $id){
        $empresa = EmpresaNaercris::find($id);
        $empresa->update($request->all());
        $empresa->save();
        return $empresa;
    }
}
