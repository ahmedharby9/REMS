<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('system_controls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->integer('system_page_id')->unsigned();
            $table->foreign('system_page_id')->references('id')->on('system_pages');
            $table->unique(['name_en', 'system_page_id']);
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
        Schema::dropIfExists('system_controls');
    }
}
