<?php

namespace Database\Seeders;

use App\Models\Campaing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cliente;
use App\Models\DetallePlanMedio;
use App\Models\Medio;
use App\Models\MedioPlataforma;
use App\Models\Persona;
use App\Models\PlanMedio;
use App\Models\Plataforma;
use App\Models\PlataformaClasificacion;
use App\Models\Programa;
use App\Models\ProgramaContacto;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = new Cliente();
        $cliente->nombreComercial = "BOOKMEDIA";
        $cliente->razonSocial = "DATA";
        $cliente->rubro = "DATA";
        $cliente->observacion = "DATA";
        $cliente->save();

        $campaing = new Campaing();
        $campaing->titulo = "BOOKMEDIA";
        $campaing->cliente_id = 1;
        $campaing->save();

        $planmedio = new PlanMedio();
        $planmedio->nombre = "PLANNN";
        $planmedio->campaign_id = 1;
        $planmedio->save();

        $medio = new Medio();
        $medio->nombre = "Plan";
        $medio->save();

        

        $programa = new Programa();
        $programa->nombre = "Hola todas";
        $programa->medio_id = 1;
        $programa->save();

        $plataforma = new Plataforma();
        $plataforma->descripcion = "fesfwe";
        $plataforma->save();

        $plataformaClasificacion = new PlataformaClasificacion();
        $plataformaClasificacion->descripcion = "ewfwefw";
        $plataformaClasificacion->plataforma_id = 1;
        $plataformaClasificacion->save();


        $medioPlataforma = new MedioPlataforma();
        $medioPlataforma->medio_id = 1;
        $medioPlataforma->idPlataformaClasificacion = 1;
        $medioPlataforma->save();


        $persona = new Persona();
        $persona->nombre = "Maruan";
        $persona->apellido = "Aguilar";
        $persona->save();



        $programacontacto = new ProgramaContacto();
        $programacontacto->programa_id = 1;
        $programacontacto->idContacto = 1;
        $programacontacto->save(); 



        $detallePlanmedio = new DetallePlanMedio();
        $detallePlanmedio->idPlanMedio = 1;
        $detallePlanmedio->idProgramaContacto = 1;
        $detallePlanmedio->save();


    }
}
