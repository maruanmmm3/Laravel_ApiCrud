<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombreComercial','razonSocial','rubro','observacion'];


    public function campaing(){
        return $this->belongsTo(Campaing::class);
    }


}
