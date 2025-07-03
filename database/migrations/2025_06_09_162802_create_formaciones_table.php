<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionesTable extends Migration
{
public function up()
{
    Schema::create('formaciones', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->enum('tipo', ['T', 'C', 'D']); // T=Taller, C=Curso, D=Diplomado
        $table->text('descripcion')->nullable();
          $table->text('facilitador')->nullable();
        $table->string('categoria')->nullable();
        $table->string('icono')->nullable(); // Añade este campo
        $table->integer('duracion')->nullable();
        $table->boolean('disponible')->default(true);
        $table->boolean('disponible_hoy')->default(false);
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('formaciones');
    }
}
