<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('model_id')->nullable()->unsigned();
            $table->integer('section_id')->nullable()->unsigned();
            $table->integer('department_id')->nullable()->unsigned();
            $table->integer('place_id')->nullable()->unsigned();
            $table->integer('compound_id')->nullable()->unsigned();
            $table->integer('type_build_id')->nullable()->unsigned();
            $table->integer('unit_id')->nullable()->unsigned();
            $table->integer('floor_id')->nullable()->unsigned();
            $table->integer('finish_id')->nullable()->unsigned();
            $table->integer('type_rent_id')->nullable()->unsigned();
            $table->integer('business_id')->nullable()->unsigned();
            $table->integer('statu_id')->nullable()->unsigned();
            $table->integer('received_data')->nullable()->unsigned();
            $table->integer('country_id')->nullable()->unsigned();
            $table->integer('state_id')->nullable()->unsigned();
            $table->integer('city_id')->nullable()->unsigned();
            $table->integer('district_id')->nullable()->unsigned();
            $table->integer('zone_id')->nullable()->unsigned();
            $table->integer('location')->nullable()->unsigned();
            $table->integer('lat_id')->nullable()->unsigned();
            $table->integer('long_id')->nullable()->unsigned();
            $table->integer('customer_id')->nullable()->unsigned();
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
        Schema::dropIfExists('real_apartments');
    }
}
