<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsFinishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_finish', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('description',300);
            $table->boolean('has_deleted');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('settings_department');
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
        Schema::dropIfExists('settings_finish');
    }
}
