<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageWorkPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_work', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('work_id');
            $table->unsignedInteger('image_id');
            $table->tinyInteger('ordinal');
            $table->timestamps();

            $table->foreign('work_id')->references('id')->on('works')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('image_work');
    }
}
