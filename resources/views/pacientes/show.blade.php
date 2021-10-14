@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h1>Detalles del paciente <strong>{{$paciente->nombre}} {{$paciente->apellido}} </strong></h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-1">
                    <a class="btn btn-primary btn-sm" href="{{route('pacientes.edit', $paciente)}}">Editar</a>
                </div>
                
                <div class="col-6 col-md-6">
                    <form action="{{route('pacientes.destroy', $paciente)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm ">Eliminar</button>
                    </form>
                </div>
            </div>
            
        </div>
        
        
    </div>
    <div class="card-body">
        {!! Form::model($paciente) !!}
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 form-group ">
                        {!! Form::label('nombre', 'Nombre', []) !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del paciente', 'readonly']) !!}
                
                        @error('nombre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('apellido', 'Apellido', []) !!}
                        {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido del paciente', 'readonly']) !!}
                    
                        @error('apellido')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('fecha_nac', 'Fecha de nacimiento', []) !!}
                        {!! Form::date('fecha_nac', null, ['class' => 'form-control', 'readonly']) !!}
                    
                        @error('fecha_nac')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('lugar_nac', 'Lugar de nacimiento', []) !!}
                        {!! Form::text('lugar_nac', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el lugar de nacimiento', 'readonly']) !!}
                    
                        @error('lugar_nac')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('direccion', 'Direccion', []) !!}
                        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la direccion del paciente', 'readonly']) !!}
                    
                        @error('direccion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('telefono', 'Telefono', []) !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del paciente', 'readonly']) !!}
                    
                        @error('telefono')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('correo', 'Correo', []) !!}
                        {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo del paciente', 'readonly']) !!}
                    
                        @error('correo')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('ocupacion', 'Ocupacion', []) !!}
                        {!! Form::text('ocupacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la ocupacion del paciente', 'readonly']) !!}
                    
                        @error('ocupacion')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('tipo_de_sangre', 'Tipo de sangre', []) !!}
                        {!! Form::text('tipo_de_sangre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de sangre del paciente', 'readonly']) !!}
                    
                        @error('tipo_de_sangre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                        {!! Form::label('aspecto_paciente', 'Aspecto del paciente', []) !!}
                        {!! Form::text('aspecto_paciente', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el aspecto del paciente', 'readonly']) !!}
                    
                        @error('aspecto_paciente')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 col-md-12 form-group">
                        {!! Form::label('prediagnostico', 'Prediagnostico', []) !!}
                        {!! Form::text('prediagnostico', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el prediagnostico del paciente', 'readonly']) !!}
                    
                        @error('prediagnostico')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
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





