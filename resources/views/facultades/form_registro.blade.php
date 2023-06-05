@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center mt-5" >Registro de Facultades </h1>


@stop

@section('content')
<div class="container w-50 my-5">
    <form action="{{url('facultades/registrar')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" class="form-control" id="codigo_facultad" name="codigo_facultad" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre_facultad" id="nombre_facultad">
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