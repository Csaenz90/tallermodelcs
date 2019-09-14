<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSolicitud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('predio_id')->unsigned();
            $table->bigInteger('solicitante_id')->unsigned();
            $table->bigInteger('licencia_id')->unsigned();
            $table->date('fecha');
            $table->integer('estado');
            $table->foreign('predio_id')->references('id')->on('predios');
            $table->foreign('solicitante_id')->references('id')->on('solicitantes');
            $table->foreign('licencia_id')->references('id')->on('licencias');
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
        Schema::dropIfExists('solicitudes');
    }
}
