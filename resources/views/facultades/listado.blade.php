@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>


@stop

@section('content')
    <p>Listado de Facultades</p>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opciones</th>
        <th> <a href="/facultades/registrar" type="button" class="btn btn-success">Adicionar</a> </th>
        </tr>
    </thead>
    <tbody>
        @php $contador = 0 @endphp
        @foreach ($facultades as $f)
        @php $contador += 1 @endphp
        <tr>
            <th scope="row">{{$contador}}</th>
            <td>{{$f->cod_facultad}}</td>
            <td>{{$f->nom_facultad}}</td>
            <td>
            <a href="{{route('editar_facultad', $f->cod_facultad)}}" type="button" class="btn btn-primary">Editar</a>
                <a  href="{{route('eliminar_facultad', $f->cod_facultad)}}" type="button" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
