@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h1>Listado de pacientes</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif 
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('pacientes.create')}}">Agregar paciente</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th colspan="1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                        <tr>
                            <td>{{$paciente->id}}</td>
                            <td>{{$paciente->nombre}}</td>
                            <td>{{$paciente->apellido}}</td>
                            <td>{{$paciente->correo}}</td>

                            
                            <td width="10px">
                                <a class="btn btn-success btn-sm" href="{{route('pacientes.show', $paciente)}}">Ver</a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
