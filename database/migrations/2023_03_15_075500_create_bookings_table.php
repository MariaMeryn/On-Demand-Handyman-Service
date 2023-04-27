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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('contact');
            $table->string('status')->default('pending');
            $table->date('date');
            $table->string("payment_status");
            $table->double("amount");
            $table->string("transaction_id")->nullable();
            $table->integer('ser_id')->nullable();
            $table->integer('user_id');
            $table->integer('serviceman_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
