@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center mt-5" >Editar Facultad </h1>


@stop

@section('content')
<div class="container w-50 my-5">
    <form action="{{ route('guardar_editar_facultad', ['id' => $facultad->cod_facultad]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo_facultad">Codigo</label>
            <input type="text" class="form-control" id="codigo_facultad" name="codigo_facultad" value="{{ $facultad->cod_facultad }}">
        </div>
        <div class="form-group">
            <label for="nombre_facultad">Nombre</label>
            <input type="text" class="form-control" name="nombre_facultad" id="nombre_facultad" value="{{ $facultad->nom_facultad }}">
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
