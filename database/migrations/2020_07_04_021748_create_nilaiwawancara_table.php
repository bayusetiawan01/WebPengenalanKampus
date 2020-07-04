<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiwawancaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilaiwawancara', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->longText('organisasi');
            $table->string('jawaban_wawancara', 128);
            $table->string('sikap_wawancara', 128);
            $table->string('koordinator', 128);
            $table->string('sbmptn', 128);
            $table->string('prodi_mipa', 128);
            $table->string('lk_kkm', 128);
            $table->string('sikap_prodi', 128);
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
        Schema::dropIfExists('nilaiwawancara');
    }
}
