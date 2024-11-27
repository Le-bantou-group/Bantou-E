<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PayPalController extends Controller
{
    public function createTransaction()
    {
        $paypal = new PayPalClient;
        $paypal->setApiCredentials(config('paypal'));
        $token = $paypal->getAccessToken();
        $paypal->setAccessToken($token);

        $order = $paypal->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "100.00"  // Le montant que vous souhaitez facturer
                    ]
                ]
            ]
        ]);

        foreach ($order['links'] as $link) {
            if ($link['rel'] === 'approve') {
                return redirect()->away($link['href']);
            }
        }

        return redirect()->back()->with('error', 'Something went wrong.');
    }

    public function captureTransaction(Request $request)
    {
        $paypal = new PayPalClient;
        $paypal->setApiCredentials(config('paypal'));
        $token = $paypal->getAccessToken();
        $paypal->setAccessToken($token);

        $result = $paypal->capturePaymentOrder($request->query('token'));

        if ($result['status'] == 'COMPLETED') {
            // Logique de traitement après la capture réussie
            return redirect()->route('home')->with('success', 'Payment successful.');
        }

        return redirect()->route('home')->with('error', 'Payment failed.');
    }
}