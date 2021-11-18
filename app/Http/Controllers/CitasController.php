<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Horario;
use App\Models\User;
use Illuminate\Http\Request;




class CitasController extends Controller
{
    
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $doctores = User::WhereHas('roles',function($q){$q->where('name','Doctor');})->get();
        $horarios = Horario::select('hora_inicio','hora_fin')->get();
        return view('citas.create', compact('horarios','doctores'));
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
        
            'fecha' => 'required',
            'doctor' => 'required',
            'hora_atencion' => 'required',
        ]);
        
        $citas = Cita::create($request->all());
        return redirect()->route('citas.index', $citas)->with('info', 'La cita se creó con exito!');;
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
