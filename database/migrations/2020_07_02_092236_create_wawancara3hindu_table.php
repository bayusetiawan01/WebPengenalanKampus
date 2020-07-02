<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancara3hinduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara3hindu', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->longText('pemahaman_agama_hindu');
            $table->longText('dasar_agama_hindu');
            $table->longText('tujuan_yadnya');
            $table->longText('pernahkah_mengeluh');
            $table->longText('berminat_kmh');
            $table->longText('saran_program');
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
        Schema::dropIfExists('wawancara3hindu');
    }
}
