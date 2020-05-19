<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipsStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("scholarship_id");
            $table->unsignedBigInteger("student_id");

            $table->foreign("scholarship_id")->references("id")->on("scholarship");
            $table->foreign("student_id")->references("id")->on("student");
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
        Schema::dropIfExists('scholarships_student');
    }
}
