<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Horario;
use App\Models\User;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = ['fecha','hora_atencion','doctor'];

    public function horarios(){
        return $this->belongsTo(Horario::class);
    }
    public function doctores(){
        return $this->belongsTo(User::class);
    }
}
