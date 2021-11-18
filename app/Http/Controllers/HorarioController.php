<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorarioController extends Controller
{
    public function __construct(){
        $this->middleware('can:horarios.index')->only('index');
        $this->middleware('can:horarios.create')->only('create','store');
        $this->middleware('can:horarios.edit')->only('edit','update');
        $this->middleware('can:horarios.destroy')->only('destroy');
    }
    public function index()
    {
        $horarios = Horario::all();
        return view('horarios.index', compact('horarios'));
    }
    
    public function edit(Horario $horario)
    {
        
        return view('horarios.edit', compact('horario'));
    }

    public function create()
    {
        return view('horarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        
            'hora_inicio' => 'required|unique:horarios',
            'hora_fin' => 'required|unique:horarios',
        ]);
        
        $horarios = Horario::create($request->all());
        return redirect()->route('horarios.index', $horarios)->with('info', 'El horario se creó con exito!');;
    
    }

    
    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
        ]);
        
        $horario->update($request->all());

        return redirect()->route('horarios.index', $horario)->with('info', 'El horario se actualizó con exito!');

    
    }

    public function destroy(Horario $horario)
    {
        $horario->delete();
        return redirect()->route('horarios.index')->with('info', 'El horario se eliminó exitosamente!');
    }
}
