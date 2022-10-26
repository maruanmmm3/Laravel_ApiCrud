<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanMedio extends Model
{
    use HasFactory;


    public function campaigns(){
        return $this->hasMany(Campaing::class);  
    } 

    public function detalle_plan_medios(){
        return $this->belongsTo(DetallePlanMedio::class);
    }


}
