<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConfigurableToCynosureSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cynosure_settings', function (Blueprint $table) {
            $table->tinyInteger('configurable')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cynosure_settings', function (Blueprint $table) {
            $table->dropColumn('configurable');
        });
    }
}
