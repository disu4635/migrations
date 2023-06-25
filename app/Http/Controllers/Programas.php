<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;

class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.listado', ['programas' => $programas]);
    }

    public function form_registro(){
        return view('programas.form_registro');
    }

    public function form_editar($id){
        $programa = Programa::findOrFail($id);
        return view('programas.form_editar', ['programa' => $programa]);
    }


    public function registrar(Request $r){
        $programa = new Programa();
        $programa->cod_programa = $r->input('codigo_programa');
        $programa->nom_programa = $r->input('nombre_programa');
        $programa->facultad = $r->input('codigo_facultad');
        $programa->save();
        return redirect()->route('listado_prog');
    }

    public function editar(Request $r, $id) {
        $programa = Programa::findOrFail($id);
        $programa->cod_programa = $r->input('codigo_programa');
        $programa->nom_programa = $r->input('nombre_programa');
        $programa->facultad = $r->input('codigo_facultad');
        $programa->save();
        return redirect()->route('listado_prog');
    }

    public function eliminar($id){
        $programa = Programa::findOrfail($id);
        $programa->delete();
        return redirect()->route('listado_prog');
    }
}
