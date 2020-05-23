<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_name');
            $table->unsignedBigInteger('goal');
            $table->string('thumbnail');
            $table->date('due_date');
            $table->text('content');
            $table->unsignedBigInteger("organization_id");
            $table->foreign("organization_id")->references("id")->on("organization");
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
        Schema::dropIfExists('project');
    }
}
