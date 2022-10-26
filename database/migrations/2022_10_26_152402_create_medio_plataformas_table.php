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
        Schema::create('medio_plataformas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('medio_id');
            $table->foreign('medio_id')->references('id')->on('medios')->onDelete('cascade');

            
            $table->unsignedBigInteger('idPlataformaClasificacion');
            $table->foreign('idPlataformaClasificacion')->references('id')->on('plataforma_clasificacions')->onDelete('cascade');

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
        Schema::dropIfExists('medio_plataformas');
    }
};
