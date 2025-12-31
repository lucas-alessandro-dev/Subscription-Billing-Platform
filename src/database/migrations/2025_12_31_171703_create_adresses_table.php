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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer', 'id')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('city', 'id');
            $table->foreignId('state_id')->constrained('state', 'id');
            $table->string('neighborhood');
            $table->string('street');
            $table->string('state');
            $table->string('zip_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');
    }
};
