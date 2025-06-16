<?php

namespace App\Http\Controllers;

use App\Contracts\PaymentServiceInterface;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentService;
    public function __construct(PaymentServiceInterface $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function pay()
    {
        $this->paymentService->charge(100.00);
        return response()->json(['message' => 'Payment processed successfully']);
    }
}
