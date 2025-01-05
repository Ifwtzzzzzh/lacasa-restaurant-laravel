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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->string('address');
            $table->boolean('rating');
            $table->text('description');
            $table->foreignId('menu_id')->constrained()->cascadeOnDelete();
            $table->foreignId('bonus_id')->nullable()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};