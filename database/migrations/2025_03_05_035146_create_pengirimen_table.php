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
        Schema::create('pengirimans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penerima');
            $table->string('nama_instansi');
            $table->string('alamat_penerima');
            $table->string('no_tlp');
            $table->string('jenis_barang');
            $table->enum('keterangan', ['Yes', 'Reg']);
            $table->string('pic');
            $table->decimal('berat', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirimen');
    }
};
