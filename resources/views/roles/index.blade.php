@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    
@endif
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('roles.create')}}">Agregar rol</a>
    </div>
    
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rol</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        
                        <td width="10px">
                            <a class="btn btn-success btn-sm" href="{{route('roles.edit', $role)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('roles.destroy', $role)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                            
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
