<?php

namespace App\Providers;

use App\Services\StripePaymentService;
use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentServiceInterface;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //binding the PaymentServiceInterface to the StripePaymentService class
        $this->app->bind(
            PaymentServiceInterface::class,
            StripePaymentService::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
