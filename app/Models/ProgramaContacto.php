<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaContacto extends Model
{
    use HasFactory;

    public function detalle_plan_medios(){
        return $this->belongsTo(DetallePlanMedio::class);
    }

    public function programas(){
        return $this->hasMany(Programa::class);
    }   
}
