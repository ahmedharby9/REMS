<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('national_id');
            $table->string('mobile');
            $table->string('phone');
            $table->string('job');
            $table->timestamp('start_date')->nullable();
            $table->string('address');
            $table->boolean('is_admin');
            $table->boolean('is_status');
            $table->boolean('is_logged_in');
            $table->timestamp('last_logged_date')->nullable();
            $table->boolean('is_intro_view');
            $table->boolean('is_active');
            $table->boolean('has_deleted');
            $table->timestamp('to_trash_date')->nullable();
            $table->string('last_page');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
