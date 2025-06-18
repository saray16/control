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
        $table->string('codigo')->unique()->change();
    });
}

public function down()
{
    Schema::table('formaciones', function (Blueprint $table) {
        $table->dropUnique(['codigo']);
    });
}

};
