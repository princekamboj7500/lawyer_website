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
            $table->string('firm_name')->nullable();
            $table->string('office_role')->nullable();
            $table->string('phone')->nullable();
            $table->string('city_region')->nullable();
            $table->string('address')->nullable();
            $table->json('specializations')->nullable();
            $table->string('other_specialization')->nullable();
            $table->string('experience_years')->nullable();
            $table->string('certifications')->nullable();
            $table->json('services')->nullable();
            $table->string('other_service')->nullable();
            $table->string('online_cases')->nullable();
            $table->string('availability')->nullable();
            $table->json('client_types')->nullable();
            $table->string('other_client_type')->nullable();
            $table->json('preferred_regions')->nullable();
            $table->string('other_preferred_region')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('willing_to_travel')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->json('payment_methods')->nullable();
            $table->string('other_payment_method')->nullable();
            $table->string('pro_bono_policy')->nullable();
            $table->string('experience_platforms')->nullable();
            $table->text('experience_description')->nullable();
            $table->text('platform_goals')->nullable();
            $table->text('additional_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customusers', function (Blueprint $table) {
            $table->dropColumn([
                'firm_name', 'office_role', 'phone', 'city_region', 'address', 
                'specializations', 'other_specialization', 'experience_years', 
                'certifications', 'services', 'other_service', 'online_cases', 
                'availability', 'client_types', 'other_client_type', 
                'preferred_regions', 'other_preferred_region', 'working_hours', 
                'willing_to_travel', 'hourly_rate', 'payment_methods', 
                'other_payment_method', 'pro_bono_policy', 'experience_platforms', 
                'experience_description', 'platform_goals', 'additional_info'
            ]);
        });
    }
};
