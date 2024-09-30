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
        Schema::table('case_table', function (Blueprint $table) {
            $table->string('petitioner')->nullable();
            $table->string('respondent')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('case_table', function (Blueprint $table) {
            $table->dropColumn(['petitioner', 'respondent']);
        });
    }
};
