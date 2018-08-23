<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsPaymentPeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_payment_period', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('description',300);
            $table->boolean('has_deleted');
            $table->integer('payment_id')->unsigned();
            $table->foreign('payment_id')->references('id')->on('settings_payment');
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
        Schema::dropIfExists('settings_period');
    }
}
