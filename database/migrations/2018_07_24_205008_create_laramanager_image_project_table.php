<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaramanagerImageProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laramanager_image_project', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('laramanager_image_id');
            $table->unsignedInteger('project_id');
            $table->tinyInteger('ordinal');
            $table->timestamps();

            $table->foreign('laramanager_image_id')->references('id')->on('laramanager_images')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laramanager_image_project');
    }
}
