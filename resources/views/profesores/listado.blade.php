@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>
@stop

@section('content')
    <p>Listado de Profesores</p>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Catedra</th>
        <th scope="col">Opciones</th>
        <th> <a href="/profesores/registrar" type="button" class="btn btn-success">Adicionar</a> </th>
        </tr>
    </thead>
    <tbody>
        @php $contador = 0 @endphp
        @foreach ($profesores as $p)
        @php $contador += 1 @endphp
        <tr>
            <th scope="row">{{$contador}}</th>
            <td>{{$p->cod_profesor}}</td>
            <td>{{$p->nom_profesor}}</td>
            <td>{{$p->cat_profesor}}</td>
            <td>
            <a  href="{{route('eliminar_profesor', $p->cod_profesor)}}" type="button" class="btn btn-danger">Eliminar</a>
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
