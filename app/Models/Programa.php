<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;


    public function programa_contactos(){
        return $this->belongsTo(ProgramaContacto::class);
    }
}
