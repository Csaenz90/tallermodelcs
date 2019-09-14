<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDepartamento extends Migration
{

    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_departamento',150);
            $table->json('opciones');
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
