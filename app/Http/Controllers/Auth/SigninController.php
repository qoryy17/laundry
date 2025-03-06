<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Signin Laundry Management System'
        ];

        return view('auth.signin', $data);
    }
}
