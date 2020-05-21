<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("location")->nullable();
            $table->dateTime("time")->nullable();
            $table->integer("capacity")->nullable();
            $table->integer("attendees")->nullable();
            $table->decimal("fee",16,0)->nullable();

            @$table->unsignedBigInteger("post_id");
            @$table->foreign("post_id")->references("id")->on("post");

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
        Schema::dropIfExists('workshop');
    }
}
