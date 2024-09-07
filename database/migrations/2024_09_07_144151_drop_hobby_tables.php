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
        Schema::dropIfExists('hobby_posts');
        Schema::dropIfExists('hobby');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
