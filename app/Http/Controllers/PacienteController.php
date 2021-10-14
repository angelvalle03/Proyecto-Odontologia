<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate(5);
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nac' => 'required',
            'lugar_nac' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required|unique:pacientes',
            'ocupacion' => 'required',
            'tipo_de_sangre' => 'required',
            'aspecto_paciente' => 'required',
            'prediagnostico' => 'required',
        ]);
        
        $pacientes = Paciente::create($request->all());
        return redirect()->route('pacientes.index', $pacientes)->with('info', 'El paciente se creó con exito!');;
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return view('pacientes.show',compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nac' => 'required',
            'lugar_nac' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'ocupacion' => 'required',
            'tipo_de_sangre' => 'required',
            'aspecto_paciente' => 'required',
            'prediagnostico' => 'required',
        ]);
        
        $paciente->update($request->all());

        return redirect()->route('pacientes.index', $paciente)->with('info', 'El paciente se actualizó con exito!');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('info', 'El paciente se eliminó exitosamente!');
    }
}


