<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClustersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clusters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->text('cluster_notes')->nullable();
            $table->tinyInteger('registration_type'); //Manual, Basic Auth, Import .kubeconfig, Service Account
            $table->text('master_domain');
            $table->text('ca_cert')->nullable();
            $table->text('client_cert')->nullable();
            $table->text('client_key')->nullable();
            $table->text('basic_auth_username')->nullable();
            $table->text('basic_auth_password')->nullable();
            $table->text('service_account_token')->nullable();
            $table->tinyInteger('additional_use_auth')->default('0'); //Does this cluster need additional authentication to use? 0=No, 1=Password
            $table->string('aua_password_hash')->nullable();
            $table->bigInteger('owner_id');
            $table->tinyInteger('active_state')->default('1'); //0=Disabled&Hidden, 1=Enabled, 2=Read-Only
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
        Schema::dropIfExists('clusters');
    }
}
