<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address')->unique();
            $table->string('password');
            $table->string('mobile_number')->unique()->nullable();
            $table->string('location')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('approved')->default(false);
            $table->string('profile_img')->default('default.png');
            $table->integer('number_customers')->default(0);
            $table->integer('number_orders')->default(0);
            $table->integer('rate')->default(100);
            $table->integer('points')->default(0);
            $table->string('badges')->default("New User");
            $table->string('role')->default("user");
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
