<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('summary');
            $table->string('description');
            $table->unsignedInteger('primary_image');
            $table->unsignedInteger('logo');
            $table->string('images');
            $table->string('url');
            $table->timestamps();

            $table->foreign('primary_image')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('logo')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('works');
    }
}
