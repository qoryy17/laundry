<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Application', 'link' => route('application.index'), 'page' => 'aria-current="page"']
        ];

        $data = [
            'title' => 'Application - Laundry Management System',
            'pageTitle' => 'Application',
            'breadCumbs' => $breadCumbs,
        ];

        return view('application.form-application', $data);
    }
}
