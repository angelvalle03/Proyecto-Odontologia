@extends('adminlte::page')

@section('title', 'Doctores')

@section('content_header')
    <h1>Listado de doctores</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif 
    <div class="card">
        {{-- @can('pacientes.create') --}}
        {{-- <div class="card-header">
            <a class="btn btn-primary" href="{{route('doctores.create')}}">Agregar horario a un doctor</a>
        </div> --}}
        {{-- @endcan --}}
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        
                        <th>Nombre</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctores as $doctore)
                        <tr>
                            <td>{{$doctore->id}}</td>
                            
                            <td>{{$doctore->name}}</td>
                            <td>{{$doctore->id}}</td>
                            

                            
                            <td width="200px" >
                                <a class="btn btn-success btn-sm" href="{{route('doctores.edit', $doctore)}}">Asignar Horario</a>
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
