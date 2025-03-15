<?php

namespace App\Http\Controllers;

use App\Helpers\ConfigTime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => '#', 'page' => ''],
            ['title' => 'Home', 'link' => route('dashboard.index'), 'page' => 'aria-current="page"'],
        ];

        $data = [
            'title' => 'Dashboard Laundry Management System',
            'pageTitle' => ConfigTime::time() . ' Sarah ',
            'breadCumbs' => $breadCumbs
        ];

        return view('home.home', $data);
    }
}
