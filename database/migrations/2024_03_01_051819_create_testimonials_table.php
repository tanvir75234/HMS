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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->bigIncrements('testimonial_id');
            $table->string('testimonial_head')->nullable();
            $table->string('testimonial_description')->nullable();
            $table->string('testimonial_image')->nullable();
            $table->string('testimonial_image_about')->nullable();
            $table->string('testimonial_image_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
