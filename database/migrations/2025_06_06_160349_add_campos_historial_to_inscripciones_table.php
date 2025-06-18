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
        Schema::table('inscripciones', function (Blueprint $table) {
            $table->string('modulo')->nullable();
            $table->date('fecha_finalizacion')->nullable();
            $table->string('nota')->nullable();
            $table->text('comentarios')->nullable();
            $table->string('certificado_url')->nullable();
        });
    }
    
    public function down(): void
    {
        Schema::table('inscripciones', function (Blueprint $table) {
            $table->dropColumn([
                'modulo',
                'fecha_finalizacion',
                'nota',
                'comentarios',
                'certificado_url',
            ]);
        });
    }

    
};
