@extends('adminlte::page')

@section('title', 'Horarios')

@section('content_header')
    <h1>Actualizar horario</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($horario, ['route' => ['horarios.update', $horario], 'method' => 'put']) !!}
        <div class="container">
            <div class="row">
                <div class="col-sm-6 form-group ">
                    {!! Form::label('hora_inicio', 'Hora de incio', []) !!}
                    {!! Form::time('hora_inicio', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del paciente']) !!}
            
                    @error('hora_inicio')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-6 form-group">
                    {!! Form::label('hora_fin', 'Hora de finalizacion', []) !!}
                    {!! Form::time('hora_fin', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido del paciente']) !!}
                
                    @error('hora_fin')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                
            </div>
        </div>  
            {!! Form::submit('Actualizar horario', ['class' => 'btn btn-primary']) !!}
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





