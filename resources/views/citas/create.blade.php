@extends('adminlte::page')

@section('title', 'Agendar cita')

@section('content_header')
    <h1>Agendar cita</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'citas.store']) !!}
            <div class="form-group">
                {!! Form::label('fecha', 'Fecha', []) !!}
                {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
            
                @error('fecha')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('doctor', 'Doctor') !!}
                {{-- {!! Form::select('doctor', $doctores, null, ['class' => 'form-control']) !!} --}}
                
                <select name="doctor" id="doctor" class="form-select">
                    <option></option>
                    @forelse ($doctores as $doctor)
                        <option {{old('doctor',$doctor->name)==$doctor->id ? "selected" : ""}} value="{{$doctor->id}}">
                            {{$doctor->name}}
                        </option>
                    @empty
                        
                    @endforelse


                </select>
                
                @error('doctor')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('hora_atencion', 'Hora de atencion') !!}
                {{-- {!! Form::select('hora_atencion', $horarios, null, ['class' => 'form-control']) !!} --}}
                <select name="hora_atencion" id="hora_atencion" class="form-select">
                    <option></option>
                    @forelse ($horarios as $horario)
                        <option {{old('hora_atencion',$horario->hora_inicio, $horario->hora_fin )==$horario->id ? "selected" : ""}} value="{{$horario->id}}">
                            {{$horario->hora_inicio}} - {{$horario->hora_fin}}
                        </option>
                    @empty
                        
                    @endforelse


                </select>
                
                @error('hora_atencion')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            
            
            

            {!! Form::submit('Agendar cita', ['class' => 'btn btn-primary']) !!}
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
