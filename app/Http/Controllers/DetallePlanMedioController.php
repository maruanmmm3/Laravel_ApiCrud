<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\DetallePlanMedio;
use App\Models\PlanMedio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetallePlanMedioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $detalle = DB::table('detalle_plan_medios')
        ->join('plan_medios', 'plan_medios.id', '=' , 'detalle_plan_medios.idPlanMedio')
        ->join('campaings', 'campaings.id', '=' , 'plan_medios.campaign_id')
        ->join('clientes', 'clientes.id', '=' , 'campaings.cliente_id')

        ->select('clientes.nombreComercial as Cliente',
        'detalle_plan_medios.id', 
        'plan_medios.nombre as PlanMedio', 
        'campaings.titulo as Campaña'
        )
        ->get();

        return $detalle;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetallePlanMedio  $detallePlanMedio
     * @return \Illuminate\Http\Response
     */
    public function show(DetallePlanMedio $detallePlanMedio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetallePlanMedio  $detallePlanMedio
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallePlanMedio $detallePlanMedio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetallePlanMedio  $detallePlanMedio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallePlanMedio $detallePlanMedio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetallePlanMedio  $detallePlanMedio
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallePlanMedio $detallePlanMedio)
    {
        //
    }
}
