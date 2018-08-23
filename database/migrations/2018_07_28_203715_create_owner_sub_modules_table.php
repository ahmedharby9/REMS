<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerSubModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('owner_sub_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->integer('system_sub_module_id')->unsigned();
            $table->foreign('system_sub_module_id')->references('id')->on('system_sub_modules');
            $table->unique(['owner_id', 'system_sub_module_id']);

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
        Schema::dropIfExists('owner_sub_modules');
    }
}
