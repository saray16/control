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
        $table->unsignedBigInteger('formacion_id')->nullable()->after('id');
        $table->foreign('formacion_id')->references('id')->on('formaciones')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('inscripciones', function (Blueprint $table) {
        $table->dropForeign(['formacion_id']);
        $table->dropColumn('formacion_id');
    });
}

};
