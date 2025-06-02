<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historial_academico', function (Blueprint $table) {
            $table->id();
            $table->string('tipo'); // Curso, Taller, Diplomado
            $table->string('nombre');
            $table->string('estado')->default('En progreso'); // Completado, En progreso
            $table->string('modulo')->nullable();
            $table->date('finalizacion')->nullable();
            $table->string('nota')->nullable();
            $table->text('comentarios')->nullable();
            $table->string('certificado')->nullable(); // ruta del certificado
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_academico');
    }
};
