<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlDeEstudiosTable extends Migration
{
    public function up()
    {
        Schema::create('control_de_estudios', function (Blueprint $table) {
            $table->id();
            $table->string('ESTADO')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('APELLIDO')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('certificado')->nullable();
            $table->integer('dia')->nullable();
            $table->integer('mes')->nullable();
            $table->integer('año')->nullable();
            $table->string('duracion')->nullable();
            $table->string('tipo de Formacion')->nullable();
            $table->string('Programa')->nullable();
            $table->string('Cohorte')->nullable();
            $table->string('fila')->nullable();
            $table->string('tipo de Formacion-Programa-Cohorte-fila')->nullable();
            $table->string('Cod de Barra')->nullable();
            $table->string('generador CB')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('control_de_estudios');
    }
}
