<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hobby_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hobby_id')
                ->constrained();
            $table->string('name');
            $table->string('slug');
            $table->string('summary');
            $table->text('content');
            $table->date('date');
            $table->boolean('ready');
            $table->string('featured_image');
            $table->json('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hobby_posts');
    }
};
