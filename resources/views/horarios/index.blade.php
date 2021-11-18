@extends('adminlte::page')

@section('title', 'Horarios')

@section('content_header')
    <h1>Listado de horarios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif 
    <div class="card">
        {{-- @can('pacientes.create') --}}
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('horarios.create')}}">Agregar horario</a>
        </div>
        {{-- @endcan --}}
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        
                        <th>Hora de inicio</th>
                        <th>Hora de finalizacion</th>
                        <th colspan="1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horarios as $horario)
                        <tr>
                            <td>{{$horario->id}}</td>
                            
                            <td>{{$horario->hora_inicio}}</td>
                            <td>{{$horario->hora_fin}}</td>

                            
                            <td width="10px">
                                
                                <a class="btn btn-success btn-sm" href="{{route('horarios.edit', $horario)}}">Editar</a>
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
