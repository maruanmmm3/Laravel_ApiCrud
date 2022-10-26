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
        Schema::create('plataforma_clasificacions', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');

            $table->unsignedBigInteger('plataforma_id');
            $table->foreign('plataforma_id')->references('id')->on('plataformas')->onDelete('cascade');

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
        Schema::dropIfExists('plataforma_clasificacions');
    }
};
