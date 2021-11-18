@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif 
<div class="card">
<div class="card-header">
    <a class="btn btn-primary" href="#">Agregar paciente</a>
</div>

<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th colspan="1"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    

                    
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('users.edit', $user)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <a class="btn btn-danger btn-sm" href="#">Eliminar</a>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
