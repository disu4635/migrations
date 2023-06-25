@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center mt-5" >Registro de Profesores </h1>


@stop

@section('content')
<div class="container w-50 my-5">
    <form action="{{url('profesores/registrar')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo_profesor">Codigo</label>
            <input type="text" class="form-control" id="codigo_profesor" name="codigo_profesor">
        </div>
        <div class="form-group">
            <label for="nombre_profesor">Nombre</label>
            <input type="text" class="form-control" name="nombre_profesor" id="nombre_profesor">
        </div>
        <div class="form-group">
            <label for="catedra_profesor">Catedra</label>
            <input type="text" class="form-control" name="catedra_profesor" id="catedra_profesor">
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
