<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFacilitadorToFormacionesTable extends Migration
{
    public function up()
    {
        Schema::table('formaciones', function (Blueprint $table) {
            $table->string('facilitador')->nullable()->after('descripcion');
        });
    }

    public function down()
    {
        Schema::table('formaciones', function (Blueprint $table) {
            $table->dropColumn('facilitador');
        });
    }
}