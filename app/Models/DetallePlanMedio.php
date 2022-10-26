<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePlanMedio extends Model
{
    use HasFactory;

    public function plan_medios(){
        return $this->hasMany(PlanMedio::class);
    }  

    public function programa_contactos(){
        return $this->hasMany(ProgramaContacto::class);
    }   

}
