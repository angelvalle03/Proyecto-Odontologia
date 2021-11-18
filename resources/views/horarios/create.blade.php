@extends('adminlte::page')

@section('title', 'Horarios')

@section('content_header')
    <h1>Crear nuevo horario</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'horarios.store']) !!}
            
            <div class="form-group">
                {!! Form::label('hora_inicio', 'Hora de inicio', []) !!}
                {!! Form::time('hora_inicio', null, ['class' => 'form-control']) !!}
            
                @error('hora_inicio')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('hora_fin', 'Hora de finalizacion', []) !!}
                {!! Form::time('hora_fin', null, ['class' => 'form-control']) !!}
            
                @error('hora_fin')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>            

            {!! Form::submit('Crear horario', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





