<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClusterGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cluster_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cluster_id');
            $table->bigInteger('group_id');
            $table->bigInteger('owner_id'); //Who created this association?
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
        Schema::dropIfExists('cluster_group');
    }
}
