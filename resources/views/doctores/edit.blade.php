@extends('adminlte::page')

@section('title', 'Asignar horario')

@section('content_header')
    <h1>Actualizar usuario <strong></strong></h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($doctore, ['route' => ['doctores.update', $doctore], 'method' => 'put']) !!}
        
        <div class="col-md-12 form-group">
            {!! Form::label('name', 'Nombre', []) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-12 form-group">
            {!! Form::label('email', 'Email', []) !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-12 form-group ">
            @foreach ($horarios as $horario)
                <div>
                    <label>
                        {!! Form::checkbox('horarios[]', $horario->id, null, ['class'=>'mr-1']) !!}
                        {{$horario->hora_inicio}} - {{$horario->hora_fin}}
                    </label>
                </div>
            @endforeach
        </div>
                
                
             
            {!! Form::submit('Asignar horario', ['class' => 'btn btn-primary']) !!}
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





