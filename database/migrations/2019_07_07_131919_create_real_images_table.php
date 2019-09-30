<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('album_id')->nullable()->unsigned();
            $table->string('title', 255)->nullable();
            $table->string('path', 255)->nullable();
            $table->string('view', 255)->nullable();
            $table->string('trash_date', 255)->nullable();
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
        Schema::dropIfExists('real_images');
    }
}
