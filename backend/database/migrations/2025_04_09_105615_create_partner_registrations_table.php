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
        Schema::create('partner_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->foreignId('user_id')->constrained('users');
            $table->string('hotel_name');
            $table->string('hotel_city');
            $table->string('hotel_address');
            $table->string('hotel_email');
            $table->string('hotel_phone');
            $table->text('note');
            $table->text('license_image_path');
            $table->text('license_image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_registrations');
    }
};
