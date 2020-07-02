<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancara3buddhaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara3buddha', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->longText('tentang_agama_budha');
            $table->longText('memilih_agama_budha');
            $table->longText('kelas_agama_budha');
            $table->longText('hari_besar_budha');
            $table->longText('pancasila_buddhist');
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
        Schema::dropIfExists('wawancara3buddha');
    }
}
