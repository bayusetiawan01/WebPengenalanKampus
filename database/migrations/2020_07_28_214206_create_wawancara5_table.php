<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancara5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara5', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 128);
            $table->string('akses_internet', 128);
            $table->string('lainnya', 128)->nullable();
            $table->string('unlimited', 128);
            $table->string('sebulan', 128);
            $table->longText('kendala');
            $table->string('streaming', 128);
            $table->string('pc', 128)->nullable();
            $table->string('laptop', 128)->nullable();
            $table->string('smartphone', 128)->nullable();
            $table->string('tablet', 128)->nullable();
            $table->string('lainnya2', 128)->nullable();
            $table->string('kamera', 128);
            $table->string('discord', 128)->nullable();
            $table->string('meet', 128)->nullable();
            $table->string('zoom', 128)->nullable();
            $table->string('tidak_satupun', 128)->nullable();
            $table->longText('kendala_penggunaan');
            $table->string('waktu', 128);
            $table->string('kegiatan', 128);
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
        Schema::dropIfExists('wawancara5');
    }
}
