<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Payment', 'link' => route('payment.index'), 'page' => 'aria-current="page"']
        ];

        $data = [
            'title' => 'Payment - Laundry Management System',
            'pageTitle' => 'Payment',
            'breadCumbs' => $breadCumbs,
        ];

        return view('payment.payment', $data);
    }

    public function printInvoice(Request $request)
    {

    }

}
