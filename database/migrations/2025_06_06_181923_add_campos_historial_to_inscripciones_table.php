<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('inscripciones', function (Blueprint $table) {
            // Solo agregar el nuevo campo
            $table->string('certificado_pdf_path')->nullable()->after('certificado_url');


        });
    }
    
    public function down()
    {
        Schema::table('inscripciones', function (Blueprint $table) {
            $table->dropColumn('certificado_pdf_path');
        });
    }
};
