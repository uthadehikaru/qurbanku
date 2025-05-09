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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('type');
            $table->unsignedInteger('weight')->default(0)->comment('Weight in kilograms');
            $table->unsignedBigInteger('price')->default(0)->comment('Price in rupiah');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('available');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
