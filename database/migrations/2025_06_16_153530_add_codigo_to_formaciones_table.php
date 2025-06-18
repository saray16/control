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
    Schema::table('formaciones', function (Blueprint $table) {
    $table->string('codigo')->nullable()->after('id'); // solo agregar columna, sin unique
});

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('formaciones', function (Blueprint $table) {
            //
        });
    }
};
