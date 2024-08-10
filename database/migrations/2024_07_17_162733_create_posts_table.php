<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500)->unique('name');
            $table->string('slug', 500);
            $table->longText('content')->nullable();
            $table->string('short_content', 200)->nullable();
            $table->string('thumbnail', 1000)->nullable();
            $table->integer('status')->default(1);
            $table->integer('rank')->default(1); //tin nổi bật

            
            $table->string('meta_keyword')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // $table->unsignedBigInteger('id_category');
            // $table->foreign('id_category')->references('id')->on('categories');


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
        Schema::dropIfExists('posts');
    }
};
