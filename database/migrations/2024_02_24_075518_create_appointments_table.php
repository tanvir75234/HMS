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
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doc_name')->nullable();
            $table->string('pati_name')->nullable();
            $table->string('date')->nullable();
            $table->string('schedule')->nullable();
            $table->string('fee')->nullable();
            $table->string('chamber')->nullable();
            $table->string('consultation_type')->nullable();
            $table->string('appointment_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
