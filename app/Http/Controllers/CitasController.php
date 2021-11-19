<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Horario;
use App\Models\User;
use Illuminate\Http\Request;




class CitasController extends Controller
{
    public function __construct(){
        $this->middleware('can:citas.index')->only('index');
        $this->middleware('can:citas.create')->only('create', 'store');
        $this->middleware('can:citas.edit')->only('edit','update');
        $this->middleware('can:citas.destroy')->only('destroy');
    }

    public function index()
    {
        $doctores = User::WhereHas('roles',function($q){$q->where('name','Doctor');})->WhereHas('horarios',function($q){$q->select('hora_inicio','hora_fin');})->get();
        $horarios = Horario::all();

        $citas = Cita::all();
        return view('citas.index', compact('citas','doctores','horarios'));
        // return $citas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $doctores = User::WhereHas('roles',function($q){$q->where('name','Doctor');})->WhereHas('horarios',function($q){$q->select('hora_inicio','hora_fin');})->get();

        // $horarios = User::join('horario_user', 'horario_user.user_id', '=', 'users.id')
        // ->join('horarios','horarios.id','=','horario_user.horario_id')
        // ->select('horarios.*')->get();
        $horarios = Horario::all();
        
        return view('citas.create', compact('doctores','horarios'));
       
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
        return redirect()->route('citas.index', $citas)->with('info', 'La cita se agendó con exito!');;
    
    }

    
    

    
    public function edit(Cita $cita)
    {
        $doctores = User::WhereHas('roles',function($q){$q->where('name','Doctor');})->WhereHas('horarios',function($q){$q->select('hora_inicio','hora_fin');})->get();

        // $horarios = User::join('horario_user', 'horario_user.user_id', '=', 'users.id')
        // ->join('horarios','horarios.id','=','horario_user.horario_id')
        // ->select('horarios.*')->get();
        $horarios = Horario::all();
        return view('citas.edit', compact('cita','horarios','doctores'));
    }

    
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
        
            'fecha' => 'required',
            'doctor' => 'required',
            'hora_atencion' => 'required',
        ]);
        
        $cita->update($request->all());

        return redirect()->route('citas.index', $cita)->with('info', 'La cita se actualizó con exito!');

    
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('info', 'La cita se eliminó exitosamente!');
    }
}
