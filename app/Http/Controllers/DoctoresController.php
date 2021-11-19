<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;





class DoctoresController extends Controller
{

    public function __construct(){
        $this->middleware('can:doctores.index')->only('index');
        $this->middleware('can:doctores.edit')->only('edit','update');
        
    }
    
    public function index()
    {
        $doctores = User::WhereHas('roles',function($q){$q->where('name','Doctor');})->get();
        
        return view('doctores.index', compact('doctores'));
    }

    public function edit(User $doctore)
    {   
        $horarios = Horario::all();        
        
        return view('doctores.edit', compact('doctore','horarios'));
    }

    public function update(Request $request, User $doctore)
    {
        $doctore->horarios()->attach($request->horarios);
        return redirect()->route('doctores.index', $doctore)->with('info','Se asignó el horario correctamente');
    }
     
}
