<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealPublicLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_public_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('real_id')->nullable()->unsigned();
            $table->string('name', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('location_sho', 255)->nullable();
            $table->string('new_location', 255)->nullable();
            $table->string('lat', 255)->nullable();
            $table->string('long', 255)->nullable();
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
        Schema::dropIfExists('real_public_locations');
    }
}
