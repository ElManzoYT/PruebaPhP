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
        //
        Schema::create('indicadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('nombreIndicador');
            $table->bigIncrements('unidadMedidaIndicador');
            $table->bigIncrements('valorIndicador');
            $table->bigIncrements('fechaIndicador');
            $table->bigIncrements('tiempoIndicador');
            $table->bigIncrements('origenIndicador');
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
        //
    }
};
