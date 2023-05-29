<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Regnotas extends Controller
{
    public function index(){
        return view('regnotas.listado');
    }
}