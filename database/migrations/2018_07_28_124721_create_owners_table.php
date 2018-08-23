<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('limit_users')->unsigned();
            $table->integer('count_users')->unsigned();
            $table->integer('limit_admin')->unsigned();
            $table->integer('count_admin')->unsigned();
            $table->integer('duration')->unsigned();
            $table->string('license');
            $table->string('activation');
            $table->timestamp('buy_date')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('expiry_date')->nullable();
            $table->string('template_unit');
            $table->string('mother_language');
            $table->boolean('is_status');
            $table->string('connection',400);
            $table->boolean('is_active');
            $table->boolean('has_key_active');
            $table->string('company_logo_path');
            $table->string('company_name');
            $table->string('ceo_mobile');
            $table->string('ceo_email');
            $table->string('ceo_image');
            $table->string('google_analysis_code');
            $table->boolean('is_intro_view');
            $table->string('last_page');
            $table->string('domain_name');
            $table->string('control_panel_version');
            $table->string('sub_domain');
            $table->string('company_FB_profile');
            $table->string('company_address');
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
        Schema::dropIfExists('owners');
    }
}
