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
        Schema::table('users', function (Blueprint $table) {
            $table->json('meta')
                ->default(json_encode([
                    'title' => '',
                    'description' => '',
                    'og:title' => '',
                    'og:description' => '',
                    'twitter:url' => '',
                    'twitter:title' => '',
                    'twitter:description' => '',
                ]));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
