<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancara2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara2', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->longText('kekurangan_kelebihan');
            $table->longText('perbedaan_mahasiswa');
            $table->longText('bem_hima');
            $table->longText('fungsi_angkatan');
            $table->longText('kritis');
            $table->longText('solusional');
            $table->longText('sistematis');
            $table->longText('logis');
            $table->longText('berlandasan');
            $table->longText('arti_pemimpin');
            $table->longText('koordinator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wawancara2');
    }
}
