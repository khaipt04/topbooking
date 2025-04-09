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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name')->unique();
            $table->text('thumbnail')->nullable();
            $table->foreignId('city_id')->constrained('cities');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->float('rating')->nullable();
            $table->foreignId('hotel_type')->constrained('hotel_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
