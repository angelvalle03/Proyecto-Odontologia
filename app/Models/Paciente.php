<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','apellido','fecha_nac','lugar_nac','direccion','telefono','correo','ocupacion','tipo_de_sangre','aspecto_paciente','prediagnostico'];
}
