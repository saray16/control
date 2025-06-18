<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cedula');
            $table->string('estado');
            $table->string('taller')->nullable();
            $table->string('curso')->nullable();
            $table->string('diplomado')->nullable();
            $table->string('horas')->nullable();
            $table->string('tipo_formacion'); // 'T', 'C', o 'D'
            $table->timestamps();
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};

