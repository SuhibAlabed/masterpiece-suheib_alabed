<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('blog_id');
            $table->string('blog_title');
            $table->string('blog_img');
            $table->string('blog_body');
            $table->boolean('approved');
            $table->unsignedBigInteger('user_id');
//            $table->unsignedBigInteger('main_service_id');
            $table->timestamps();
//            $table->foreign('main_service_id')->references('main_service_id')->on('main_services');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
