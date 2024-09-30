<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class CustomUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'customusers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','type','email', 'password', 'firm_name', 'office_role', 'phone', 'city_region', 'address', 
        'specializations', 'other_specialization', 'experience_years', 'certifications', 'services', 'other_service', 'online_cases', 'availability', 'client_types', 'other_client_type', 
        'preferred_regions', 'other_preferred_region', 'working_hours', 'willing_to_travel', 'hourly_rate', 'payment_methods', 'other_payment_method', 'pro_bono_policy', 'experience_platforms', 'experience_description', 'platform_goals', 'additional_info',
        'welcome_email', 'terms', 'subscription_plan','plan_status','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function plan()
    {
        return $this->hasOne(UserPlan::class);
    }
}
