@extends('adminlte::page')

@section('title', 'Citas')

@section('content_header')
    <h1>Lista de citas</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    
@endif
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('citas.create')}}">Agendar cita</a>
    </div>
    
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Hora de incio</th>
                    <th>Hora de finalizacion</th>
                    <th>Descripcion</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr>
                        <td>{{$cita->id}}</td>
                        <td>{{$cita->fecha}}</td>
                        <td>{{$cita->doctor->name}}</td>
                        <td>{{$cita->horario->hora_inicio}}</td>
                        <td>{{$cita->horario->hora_fin}}</td>
                        
                        <td width="10px">
                            <a class="btn btn-success btn-sm" href="{{route('citas.edit', $cita)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('citas.destroy', $cita)}}" method="POST">
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
