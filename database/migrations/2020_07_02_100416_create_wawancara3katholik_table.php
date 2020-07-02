<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancara3katholikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara3katholik', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->string('asal_gereja', 128);
            $table->string('masuk_fmipa', 128);
            $table->longText('jelaskan_trinitas');
            $table->longText('siapa_yesus');
            $table->longText('seperti_apa_natal');
            $table->longText('pelayanan_gereja');
            $table->string('membaca_alkitab', 128);
            $table->longText('berminat_kmk');
            $table->longText('ayat_pegangan');
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
        Schema::dropIfExists('wawancara3katholik');
    }
}
