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
        Schema::table('customusers', function (Blueprint $table) {
            $table->boolean('terms')->nullable();
            $table->string('subscription_plan')->nullable();
            $table->string('plan_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customusers', function (Blueprint $table) {
            $table->dropColumn('terms','subscription_plan','plan_status');
        });
    }
};
