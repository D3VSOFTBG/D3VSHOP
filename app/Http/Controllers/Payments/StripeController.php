<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;

class StripeController extends Controller
{
    function post(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_51IXyhNLDTUdeI5K5ug4g5xqDZi89oVrPCE8qoVE1mplriuCqhRYXRGdRtCma0JH8HmTcMqCyW3jcEEavpJ6COI1y00DzArcC4d');

        Stripe\Charge::create([
            "amount" => 100 * 100,
            "curency" => "usd",
            "source" => $request->stripeToken,
            "description" => "This payment is for testing",
        ]);

        return back();
    }
}
