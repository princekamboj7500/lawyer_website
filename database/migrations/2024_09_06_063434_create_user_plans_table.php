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
        Schema::create('user_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('customusers')->onDelete('cascade'); 
            $table->enum('plan_type', ['basic', 'premium']);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->date('renewal_date')->nullable(); 
            $table->boolean('renewal_status')->default(false); 
            $table->enum('payment_status', ['pending', 'successful', 'failed']); 
            $table->string('previous_plan_type')->nullable(); 
            $table->decimal('subscription_cost', 8, 2)->nullable(); 
            $table->string('stripe_subscription_id')->nullable(); 
            $table->string('stripe_payment_id')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_plans');
    }
};
