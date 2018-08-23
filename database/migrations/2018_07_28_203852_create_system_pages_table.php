<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('system_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->integer('system_sub_module_id')->unsigned();
            $table->foreign('system_sub_module_id')->references('id')->on('system_sub_modules');
            $table->unique(['name_en', 'system_sub_module_id']);
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
        Schema::dropIfExists('system_pages');
    }
}
