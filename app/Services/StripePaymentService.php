<?php

namespace App\Services;

use App\Contracts\PaymentServiceInterface;

class StripePaymentService implements PaymentServiceInterface
{
    public function charge(float $amount): bool
    {
        // Here you would integrate with the Stripe API to process the payment.
        // For demonstration purposes, we'll just return true.

        // Example: \Stripe\Charge::create(['amount' => $amount, 'currency' => 'usd']);
        logger()->info("Charging amount: $amount via Stripe");
        return true; // Assume the charge was successful
    }
}
