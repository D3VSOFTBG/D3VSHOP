<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;

class StripeController extends Controller
{
    function post()
    {
        Stripe\Stripe::setApiKey('sk_test_51IXyhNLDTUdeI5K5ug4g5xqDZi89oVrPCE8qoVE1mplriuCqhRYXRGdRtCma0JH8HmTcMqCyW3jcEEavpJ6COI1y00DzArcC4d');

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'T-shirt',
                ],
                'unit_amount' => 5000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => request()->getSchemeAndHttpHost(),
            'cancel_url' => request()->getSchemeAndHttpHost(),
          ]);

          return redirect($session->url)->withStatus(303);
    }
}
