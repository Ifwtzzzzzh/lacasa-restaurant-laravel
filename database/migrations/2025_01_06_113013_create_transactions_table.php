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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('phone_number');
            $table->foreignId('reservation_id')->constrained()->cascadeOnDelete();
            $table->enum('payment_method', ['down_payment', 'full_payment'])->nullable();
            $table->string('payment_status')->nullable();
            $table->foreignId('bonus_id')->constrained()->cascadeOnDelete();
            $table->integer('total_amount')->nullable();
            $table->date('transaction_date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};