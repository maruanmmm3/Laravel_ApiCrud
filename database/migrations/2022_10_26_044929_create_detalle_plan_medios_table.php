<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_plan_medios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idPlanMedio');
            $table->foreign('idPlanMedio')->references('id')->on('plan_medios');

           $table->unsignedBigInteger('idProgramaContacto');
            $table->foreign('idProgramaContacto')->references('id')->on('programa_contactos'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_plan_medios');
    }
};
