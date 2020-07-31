<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePemetaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('pemetaan');
        Schema::create('pemetaan', function (Blueprint $table) {
            $table->id();
            $table->string('user_npm', 128);
            $table->string('pilihan1', 128)->nullable();
            $table->string('pilihan2', 128)->nullable();
            $table->string('pilihan11', 128)->nullable();
            $table->string('pilihan12', 128)->nullable();
            $table->string('pilihan21', 128)->nullable();
            $table->string('pilihan22', 128)->nullable();
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
        Schema::dropIfExists('pemetaan');
    }
}
