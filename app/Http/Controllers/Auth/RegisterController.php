<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\CustomUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuinate\HTML;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/email/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        Session::put('preUrl', URL::previous());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customusers'],
            'phone' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'type' => ['required', 'string'],
            'terms' => ['required'],
        ];

        if ($data['type'] === 'lawyer') {
            $rules = array_merge($rules, [
                'firm_name' => ['required', 'string', 'max:255'],
                'office_role' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:20'],
                'city_region' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'specializations' => ['required', 'array'],
                'experience_years' => ['required', 'string'],
                'certifications' => ['required', 'string'],
                'services' => ['required', 'array'],
                'online_cases' => ['required', 'string'],
                'availability' => ['required', 'string'],
                'client_types' => ['required', 'array'],
                'preferred_regions' => ['required', 'array'],
                'working_hours' => ['required', 'string'],
                'willing_to_travel' => ['required', 'string'],
                'hourly_rate' => ['required', 'string'],
                'payment_methods' => ['required', 'array'],
                'pro_bono_policy' => ['required', 'string'],
                'experience_platforms' => ['required', 'string'],
                //'experience_description' => ['required', 'string'],
                //'platform_goals' => ['required', 'string'],
                'additional_info' => ['nullable', 'string'],
                'subscription_plan' => ['required', 'string']
            ]);
        }

        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($data['type'] === 'lawyer') {
            return Customuser::create([
                'type' => $data['type'],
                'name' => $data['name'],
                'email' => $data['email'],
                'terms' => $data['terms'] === 'on' ? 1 : 0,
                'password' => Hash::make($data['password']),
                'firm_name' => $data['firm_name'],
                'office_role' => $data['office_role'],
                'phone' => $data['phone'],
                'city_region' => $data['city_region'],
                'address' => $data['address'],
                'specializations' => isset($data['specializations']) ? json_encode($data['specializations']) : [],
                'other_specialization' => $data['other_specialization'],
                'experience_years' => $data['experience_years'],
                'certifications' => isset($data['certifications']) ? $data['certifications'] : '',
                'services' => isset($data['services']) ? json_encode($data['services']) : [],
                'other_service' => isset($data['other_service']) ? $data['other_service'] : '',
                'online_cases' => isset($data['online_cases']) ? $data['online_cases'] : '',
                'availability' => isset($data['availability']) ? $data['availability'] : '',
                'client_types' => isset($data['client_types']) ? json_encode($data['client_types']) : [],
                'other_client_type' => $data['other_client_type'],
                'preferred_regions' => isset($data['preferred_regions']) ? json_encode($data['preferred_regions']) : [],
                'other_preferred_region' => $data['other_preferred_region'],
                'working_hours' => isset($data['working_hours']) ? $data['working_hours'] : '',
                'willing_to_travel' => isset($data['willing_to_travel']) ? $data['willing_to_travel'] : '',
                'hourly_rate' => $data['hourly_rate'],
                'payment_methods' => isset($data['payment_methods']) ? json_encode($data['payment_methods']) : [],
                'other_payment_method' => $data['other_payment_method'],
                'pro_bono_policy' => $data['pro_bono_policy'],
                'experience_platforms' => isset($data['experience_platforms']) ? $data['experience_platforms'] : '',
                'experience_description' => $data['experience_description'],
                'platform_goals' => $data['platform_goals'],
                'additional_info' => $data['additional_info'],
                'subscription_plan' => $data['subscription_plan'],
                'plan_status' => 'pending',
            ]);
        }

        return Customuser::create([
            'type' => $data['type'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'terms' => $data['terms'] === 'on' ? 1 : 0,
            'password' => Hash::make($data['password']),
        ]);
    }
    public function redirectTo()
    {
        return Session::get('preUrl') ? Session::get('preUrl') :   $this->redirectTo;
    }
}
