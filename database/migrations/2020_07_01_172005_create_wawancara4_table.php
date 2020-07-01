<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancara4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara4', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->string('asma', 4)->nullable();
            $table->string('sakit_mata', 4)->nullable();
            $table->string('dbd', 4)->nullable();
            $table->string('tbc', 4)->nullable();
            $table->string('patah_tulang', 4)->nullable();
            $table->string('malaria', 4)->nullable();
            $table->string('pneumonia', 4)->nullable();
            $table->string('kanker', 4)->nullable();
            $table->string('liver', 4)->nullable();
            $table->string('sinusitis', 4)->nullable();
            $table->string('hepatitis', 4)->nullable();
            $table->string('penyakit_jantung', 4)->nullable();
            $table->string('cacar', 4)->nullable();
            $table->string('hipertensi', 4)->nullable();
            $table->string('kolera', 4)->nullable();
            $table->string('campak', 4)->nullable();
            $table->string('hipotensi', 4)->nullable();
            $table->string('tifus', 4)->nullable();
            $table->string('hipotermia', 4)->nullable();
            $table->string('hipertermia', 4)->nullable();
            $table->string('anemia', 4)->nullable();
            $table->string('usus_buntu', 4)->nullable();
            $table->string('migrain', 4)->nullable();
            $table->string('diabetes', 4)->nullable();
            $table->string('epilepsi', 4)->nullable();
            $table->string('sakit_gigi', 4)->nullable();
            $table->string('maag', 4)->nullable();
            $table->string('hiv', 4)->nullable();
            $table->string('penyakit_lain', 128)->nullable();
            $table->longText('sedang_menderita')->nullable();
            $table->longText('enam_bulan')->nullable();
            $table->longText('tiga_bulan')->nullable();
            $table->longText('penyakit_keluarga')->nullable();
            $table->longText('jenis_alergi')->nullable();
            $table->longText('keluhan_alergi')->nullable();
            $table->longText('cara_menangani')->nullable();
            $table->longText('rumah_sakit')->nullable();
            $table->longText('operasi')->nullable();
            $table->longText('pantangan_operasi')->nullable();
            $table->string('nama_darurat', 128);
            $table->string('alamat_darurat', 128);
            $table->string('hp_darurat', 128);
            $table->string('hubungan_darurat', 128);
            $table->string('nama_darurat2', 128);
            $table->string('alamat_darurat2', 128);
            $table->string('hp_darurat2', 128);
            $table->string('hubungan_darurat2', 128);
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
        Schema::dropIfExists('wawancara4');
    }
}
