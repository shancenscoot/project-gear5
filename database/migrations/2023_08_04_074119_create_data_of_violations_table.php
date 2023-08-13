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
        Schema::create('data_of_violations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santris');
            $table->foreignId('violation_id')->constrained('violations');
            $table->foreignId('sanction_id')->constrained('sanctions');
            $table->enum('status', ['proses', 'selesai'])->default('proses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_of_violations');
    }
};
