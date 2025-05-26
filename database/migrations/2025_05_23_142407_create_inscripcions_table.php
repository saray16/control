<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cedula');
            $table->string('estado');
            $table->string('taller')->nullable();
            $table->string('curso')->nullable();
            $table->string('diplomado')->nullable();
            $table->string('horas')->nullable();
            $table->string('tipo_formacion')->nullable();
            $table->string('dia');
            $table->string('mes');
            $table->string('anio');
            $table->string('facilitador');
            $table->string('codigo_facilitador');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscripcions');
    }
};
