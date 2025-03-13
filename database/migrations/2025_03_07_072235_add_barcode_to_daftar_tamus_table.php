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
        Schema::table('daftar_tamus', function (Blueprint $table) {
            $table->string('barcode')->unique()->after('jam_kedatangan');
        });
    }

    public function down()
    {
        Schema::table('daftar_tamus', function (Blueprint $table) {
            $table->dropColumn('barcode');
        });
    }
};
