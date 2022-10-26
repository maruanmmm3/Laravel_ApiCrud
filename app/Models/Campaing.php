<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaing extends Model
{
    use HasFactory;



    public function clientes(){
        return $this->hasMany(Cliente::class);
    }

    public function plan_medios(){
        return $this->belongsTo(PlanMedio::class);
    }
}


