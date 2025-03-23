<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Report Transaction', 'link' => route('payment.index'), 'page' => 'aria-current="page"']
        ];

        $data = [
            'title' => 'Report Transaction - Laundry Management System',
            'pageTitle' => 'Report Transaction',
            'breadCumbs' => $breadCumbs,
        ];

        return view('report.report-transaction', $data);
    }

    public function showTransaction(Request $request)
    {

    }

}
