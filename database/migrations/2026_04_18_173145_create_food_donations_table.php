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
        Schema::create('food_donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('quantity'); // e.g. "20 meals"
            $table->dateTime('expiry_time');
            $table->dateTime('pickup_time_start')->nullable();
            $table->dateTime('pickup_time_end')->nullable();
            $table->enum('status', ['available', 'claimed', 'picked_up', 'expired'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_donations');
    }

};
