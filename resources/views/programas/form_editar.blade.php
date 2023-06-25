@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center mt-5" >Editar Programa </h1>


@stop

@section('content')
<div class="container w-50 my-5">
    <form action="{{ route('guardar_editar_programa', ['id' => $programa->cod_programa]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo_programa">Codigo</label>
            <input type="text" class="form-control" id="codigo_programa" name="codigo_programa" value="{{ $programa->cod_programa }}">
        </div>
        <div class="form-group">
            <label for="nombre_programa">Nombre</label>
            <input type="text" class="form-control" name="nombre_programa" id="nombre_programa" value="{{ $programa->nom_programa }}">
        </div>
        <div class="form-group">
            <label for="codigo_facultad">Facultad</label>
            <input type="text" class="form-control" name="codigo_facultad" id="codigo_facultad" value="{{ $programa->facultad }}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <scri
