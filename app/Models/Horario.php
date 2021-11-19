<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable = ['hora_inicio','hora_fin'];

    //relacion uno a muchos
    public function citas (){
        return $this->hasMany(Cita::class);
    }

    //Relacion mucho a mucho con horarios
    public function users(){
        return $this->belongsToMany(User::class);
    }

}
