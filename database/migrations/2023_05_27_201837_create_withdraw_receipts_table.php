<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('withdraw_receipts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('receipt_id')->unique();
            $table->string('status')->default('بررسی اولیه');
            $table->bigInteger('amount');
            $table->string('withdraw_type')->default('کارت به کارت');
            $table->bigInteger('card_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw_receipts');
    }
};
