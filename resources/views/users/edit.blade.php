@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')
    <h1>Actualizar usuario <strong>{{$user->name}}</strong></h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 form-group ">
                    {!! Form::label('id', 'Id', []) !!}
                    {!! Form::text('id', null, ['class' => 'form-control']) !!}
            
                    @error('id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-12 form-group">
                    {!! Form::label('name', 'Nombre', []) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-12 form-group">
                    {!! Form::label('email', 'Email', []) !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido del paciente']) !!}
                
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                    <div class="col-md-12 form-group ">
                        @foreach ($roles as $role)
                            <div>
                                <label>
                                    {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                                    {{$role->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                
            </div>
        </div>  
            {!! Form::submit('Actualizar paciente', ['class' => 'btn btn-primary']) !!}
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





