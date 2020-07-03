<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancara3islamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara3islam', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->longText('kalimat_syahadat');
            $table->string('shalat_wajib', 128);
            $table->string('tilawah', 128);
            $table->string('dhuha', 128);
            $table->string('tahajud', 128);
            $table->string('rawatib', 128);
            $table->string('berjamaah', 128);
            $table->string('matsurat', 128);
            $table->string('shaum_sunnah', 128);
            $table->string('pengajian', 128);
            $table->string('durasi_pengajian', 128);
            $table->string('tempat_pengajian', 128);
            $table->string('mentoring', 128);
            $table->string('durasi_mentoring', 128);
            $table->string('tempat_mentoring', 128);
            $table->string('liqa', 128);
            $table->string('durasi_liqa', 128);
            $table->string('tempat_liqa', 128);
            $table->string('keputrian', 128)->nullable();
            $table->string('durasi_keputrian', 128)->nullable();
            $table->string('tempat_keputrian', 128)->nullable();
            $table->string('baca_quran', 128);
            $table->string('durasi_baca_quran', 128);
            $table->string('tempat_baca_quran', 128);
            $table->string('hafalan_quran', 128);
            $table->longText('buku_islam');
            $table->longText('tokoh_islam');
            $table->longText('pendapat_jilbab');
            $table->longText('pendapat_ikhtilat');
            $table->longText('pendapat_pacaran');
            $table->longText('ramalan_bintang');
            $table->longText('pendapat_merokok');
            $table->longText('pemimpin_non_muslim');
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
        Schema::dropIfExists('wawancara3islam');
    }
}
