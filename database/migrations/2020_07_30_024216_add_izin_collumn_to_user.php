<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIzinCollumnToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('suratizin', 128)->nullable();
        });
        Schema::table('user', function (Blueprint $table) {
            $table->string('suratpernyataan', 128)->nullable();
        });
        if (Schema::hasColumn('wawancara', 'suratpernyataan')) {
            Schema::table('wawancara', function (Blueprint $table) {
                $table->dropColumn('suratpernyataan');
            });
        }
        if (Schema::hasColumn('wawancara', 'suratizin')) {
            Schema::table('wawancara', function (Blueprint $table) {
                $table->dropColumn('suratizin');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('suratpernyataan');
        });
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('suratizin');
        });
    }
}
