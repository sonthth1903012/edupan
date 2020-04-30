<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("title")->nullable();
            $table->string("author")->nullable();
            $table->longText("content")->nullable();
            $table->text("shortDesc")->nullable();
            $table->string("thumbnail")->nullable();

            @$table->unsignedBigInteger("category_id");
            @$table->unsignedBigInteger("user_id");
            @$table->foreign("category_id")->references("id")->on("category");
            @$table->foreign("user_id")->references("id")->on("users");

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
        Schema::dropIfExists('post');
    }
}
