@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center mt-5" >Registro de Programas </h1>


@stop

@section('content')
<div class="container w-50 my-5">
    <form action="{{url('programas/registrar')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo_programa">Codigo</label>
            <input type="text" class="form-control" id="codigo_programa" name="codigo_programa">
        </div>
        <div class="form-group">
            <label for="nombre_programa">Nombre</label>
            <input type="text" class="form-control" name="nombre_programa" id="nombre_programa">
        </div>
        <div class="form-group">
            <label for="codigo_facultad">Facultad</label>
            <input type="text" class="form-control" name="codigo_facultad" id="codigo_facultad">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <scri
