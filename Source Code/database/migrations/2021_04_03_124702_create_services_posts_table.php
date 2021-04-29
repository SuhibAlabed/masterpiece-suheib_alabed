<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('post_title');
            $table->string('post_body');
            $table->string('post_img');
            $table->integer('post_like')->default(0);
            $table->boolean('Sponsored_post')->default(0);
            $table->boolean('approved')->default(0);
            $table->string('post_type');
//            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
//            $table->foreign('service_id')->references('service_id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_posts');
    }
}
