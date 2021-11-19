<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Paciente']);
        $role3 = Role::create(['name'=>'Doctor']);

        

        Permission::create(['name'=>'users.index', 'description'=>'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'users.edit', 'description'=>'Asignar un rol a un usuario'])->syncRoles([ $role1]);

        Permission::create(['name'=>'horarios.index', 'description'=>'Ver listado de horarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'horarios.create', 'description'=>'Crear un nuevo horario'])->syncRoles([$role1]);
        Permission::create(['name'=>'horarios.edit', 'description'=>'Editar un horario'])->syncRoles([ $role1]);
        Permission::create(['name'=>'horarios.destroy', 'description'=>'Eliminar un horario'])->syncRoles([$role1]);

        Permission::create(['name'=>'roles.index', 'description'=>'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.create', 'description'=>'Crear un nuevo rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.edit', 'description'=>'Editar un rol'])->syncRoles([ $role1]);
        Permission::create(['name'=>'roles.destroy', 'description'=>'Eliminar un rol'])->syncRoles([$role1]);

        Permission::create(['name'=>'doctores.index', 'description'=>'Ver listado de doctores'])->syncRoles([$role1]);
        Permission::create(['name'=>'doctores.edit', 'description'=>'Editar un doctor'])->syncRoles([ $role1]);
        
        Permission::create(['name'=>'citas.index', 'description'=>'Ver listado de citas'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'citas.create', 'description'=>'Crear una cita'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'citas.edit', 'description'=>'Editar una cita'])->syncRoles([ $role1,$role2]);
    }
}
