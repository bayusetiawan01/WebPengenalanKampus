<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTimerCollumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('jawaban', 'timer')) {
            Schema::table('jawaban', function (Blueprint $table) {
                $table->dropColumn('timer');
            });
        }
        Schema::table('jawaban', function (Blueprint $table) {
            $table->string('timer', 128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jawaban', function (Blueprint $table) {
            $table->dropColumn('timer');
        });
    }
}
