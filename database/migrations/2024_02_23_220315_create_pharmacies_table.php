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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('amount')->nullable();
            $table->string('discount')->nullable();
            $table->string('paid_ammount')->nullable();
            $table->string('due_ammount')->nullable();
            $table->string('prescription_photo')->nullable();
            $table->string('pharamcy_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
