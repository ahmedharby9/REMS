<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealPublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_publishers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->nullable()->unsigned();
            $table->integer('client_Real_id')->nullable()->unsigned();
            $table->string('client_view', 255)->nullable();
            $table->string('client_like', 255)->nullable();
            $table->string('actual_user', 255)->nullable();
            $table->string('actual_owner', 255)->nullable();
            $table->string('other_user', 255)->nullable();
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
        Schema::dropIfExists('real_publishers');
    }
}
