<?php

namespace App\Contracts;

interface PaymentServiceInterface
{
    public function charge(float $amount): bool;
}
