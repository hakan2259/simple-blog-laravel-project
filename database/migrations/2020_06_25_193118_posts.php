<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger("category_id")->unsigned();
            $table->string("title");
            $table->string("image");
            $table->longText("content");
            $table->integer("hit")->default(0);
            $table->string("slug");
            $table->timestamps();

            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");



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
}
