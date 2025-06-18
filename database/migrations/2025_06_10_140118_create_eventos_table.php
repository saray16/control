<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('tipo', ['curso', 'taller', 'diplomado']);
            $table->text('descripcion')->nullable();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->integer('horas_duracion');
            $table->foreignId('facilitador_id')->constrained('users');
            $table->enum('modalidad', ['presencial', 'virtual', 'hibrido']);
            $table->string('lugar')->nullable();
            $table->decimal('costo', 10, 2)->default(0);
            $table->integer('cupo_maximo');
            $table->enum('estado', ['planificado', 'en_progreso', 'completado', 'cancelado'])->default('planificado');
            $table->string('imagen')->nullable();
            $table->text('requisitos')->nullable();
            $table->text('objetivos')->nullable();
            $table->string('codigo_referencia')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};