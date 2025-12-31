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
        Schema::create('plan_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained('plan', 'id')->onDelete('cascade');
            $table->decimal('price', 10, 2)->notNullable();
            $table->string('currency', 3)->notNullable();
            $table->string('billing_cycle')->notNullable();
            $table->boolean('is_active')->default(true);
            $table->date('valid_from')->notNullable();
            $table->date('valid_to')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_prices');
    }
};
