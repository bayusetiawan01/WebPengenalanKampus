<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancara3protestanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara3protestan', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->string('asal_gereja', 128);
            $table->longText('masuk_fmipa');
            $table->longText('kesaksian_pertolongan');
            $table->longText('siapa_yesus');
            $table->longText('arti_natal');
            $table->longText('pelayanan_gereja');
            $table->string('membaca_alkitab', 128);
            $table->longText('berminat_pmk');
            $table->longText('ayat_disukai');
            $table->longText('persekutuan_fmipa');
            $table->longText('maukah_ikut_persekutuan_fmipa');
            $table->longText('arti_pelayanan');
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
        Schema::dropIfExists('wawancara3protestan');
    }
}
