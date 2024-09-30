<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    use HasFactory;

    protected $table = 'user_plans';

    protected $fillable = [
        'user_id',
        'plan_type',
        'start_date',
        'end_date',
        'is_active',
        'renewal_date',
        'renewal_status',
        'payment_status',
        'previous_plan_type',
        'subscription_cost',
        'stripe_subscription_id',
        'stripe_payment_id',
    ];

    public function user()
    {
        return $this->belongsTo(CustomUser::class);
    }
}
