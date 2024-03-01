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
        Schema::create('popular_blogs', function (Blueprint $table) {
            $table->bigIncrements('popular_blog_id');
            $table->string('popular_blog')->nullable();
            $table->string('popular_blog_category')->nullable();
            $table->string('popular_blog_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popular_blogs');
    }
};
