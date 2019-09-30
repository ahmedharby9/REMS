<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('real_id')->nullable()->unsigned();
            $table->string('publish', 255)->nullable();
            $table->string('rent_sale', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('distinction', 255)->nullable();
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
        Schema::dropIfExists('real_actions');
    }
}
