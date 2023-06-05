<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get();
        return view('facultades.listado', ['facultades' => $facultades]);
    }

    public function form_registro(){
        return view('facultades.form_registro');
    }

    
    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->cod_facultad = $r->input('codigo_facultad');
        $facultad->nom_facultad = $r->input('nombre_facultad');
        $facultad->save();
        return redirect()->route('listado_fac');
    }

    public function eliminar($id){
        $facultad = Facultad::findOrfail($id);
        $facultad->delete();
        return redirect()->route('listado_fac');
    }

}
