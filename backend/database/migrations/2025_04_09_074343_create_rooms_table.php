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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained('hotels');
            $table->foreignId('room_type')->constrained('room_categories');
            $table->decimal('price');
            $table->integer('quantity');
            $table->integer('remaining_quantity');
            $table->integer('adults');
            $table->integer('children');
            $table->foreignId('bed_type')->constrained('beds');
            $table->integer('bed_quantity');
            $table->integer('room_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
