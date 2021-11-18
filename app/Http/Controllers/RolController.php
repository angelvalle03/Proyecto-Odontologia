<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolController extends Controller
{
    public function __construct(){
        $this->middleware('can:roles.index')->only('index');
        $this->middleware('can:roles.create')->only('create', 'store');
        $this->middleware('can:roles.edit')->only('edit','update');
        $this->middleware('can:roles.destroy')->only('destroy');
    }

    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

   
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create',compact('permissions'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        
        $permission = $request->input("permissions");
        $role = Role::create($request->all());
        $role->syncPermissions($permission);
        return redirect()->route('roles.edit', $role)->with('El rol se creó con exito');
    }

    
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit', compact('role','permissions'));
    }

    
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $permission = $request->input("permissions");
        $role->update($request->all());
        $role->syncPermissions($permission);
        return redirect()->route('roles.edit', $role)->with('info','El rol se actualizó con exito');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('info','El rol se elimino correctamente!');
    }
}
