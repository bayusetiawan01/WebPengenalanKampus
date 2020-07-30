<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReplaceJawabanCollumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('jawaban', 'jawaban')) {
            Schema::table('jawaban', function (Blueprint $table) {
                $table->dropColumn('jawaban');
            });
        }
        Schema::table('jawaban', function (Blueprint $table) {
            $table->longText('jawaban')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
