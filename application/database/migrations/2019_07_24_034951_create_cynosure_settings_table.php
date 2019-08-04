<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCynosureSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cynosure_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('key')->unique();
            $table->string('value')->nullable();;
            $table->string('system_default')->nullable();;
            $table->string('setting_type'); //text, textbox, select, multi-select, checkbox-boolean, tinymce
            $table->text('available_options')->nullable();;
            $table->string('available_options_data_type')->nullable();
            $table->text('description')->nullable();;
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cynosure_settings');
    }
}
