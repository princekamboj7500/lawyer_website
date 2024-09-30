<?php

namespace App\Http\Controllers;

use Stripe;
use App\UserPlan;
use Carbon\Carbon;
use App\CustomUser;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PaymentController extends Controller
{
    public function index($userId)
    {
        $user = Customuser::find($userId);
        if ($user->type !== 'lawyer') {
            abort(403, 'Only lawyers can subscribe.');
        }else{
            if($user->plan_status == "pending"){
                return view('stripe', compact('user'));
            }else{
                return redirect()->route('login')->with('success', 'You have already Purchased the subscription.');
            }
        }
    }

    public function stripe(Request $request): RedirectResponse
    {
        try {
            // Find the user
            $user = Customuser::find($request->input('user_id'));
    
            // Determine the amount based on the subscription plan
            if ($user->subscription_plan == "basic") {
                $amount = 10; // Stripe accepts amounts in cents
            } else {
                $amount = 20;
            }
    
            // Set the Stripe API key
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
            // Create the charge
            $charge = Stripe\Charge::create([
                "amount" => $amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Stripe Test Payment"
            ]);
    
            // If charge is successful, update the user's plan status
            $user->plan_status = 'active';
            $user->save();

            UserPlan::create([
                'user_id' => $user->id,
                'plan_type' => $user->subscription_plan,
                'start_date' => Carbon::now(), // Today's date
                'end_date' => Carbon::now()->addMonth(), // Next month's date
                'renewal_date' => Carbon::now()->addMonth(),
                'payment_status' => "successful",
                'subscription_cost' => $amount,
            ]);
    
            // Redirect to the login page with success message
            return redirect()->route('login')->with('success', 'Payment has been successful');
        } catch (\Stripe\Exception\CardException $e) {
            // Handle card-specific errors (e.g., card declined)
            return redirect()->back()->with('error', 'Your card was declined.');
        } catch (\Stripe\Exception\RateLimitException $e) {
            // Handle API rate limit errors
            return redirect()->back()->with('error', 'Too many requests. Please try again later.');
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            // Handle invalid parameters
            return redirect()->back()->with('error', 'Invalid payment request.');
        } catch (\Stripe\Exception\AuthenticationException $e) {
            // Handle authentication errors (incorrect API keys)
            return redirect()->back()->with('error', 'Authentication with Stripe API failed.');
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            // Handle network communication errors
            return redirect()->back()->with('error', 'Network error. Please try again.');
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle general API errors
            return redirect()->back()->with('error', 'Payment processing error. Please try again.');
        } catch (\Exception $e) {
            // Handle any other general exceptions
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
