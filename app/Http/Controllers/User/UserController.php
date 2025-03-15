<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function index()
    {
        $breadCumbs = [['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''], ['title' => 'Management', 'link' => '#', 'page' => ''], ['title' => 'Users', 'link' => route('users.index'), 'page' => 'aria-current="page"']];

        $data = [
            'title' => 'Users Management - Laundry Management System',
            'pageTitle' => 'Users Management',
            'breadCumbs' => $breadCumbs,
        ];

        return view('user.users', $data);
    }

    public function form(Request $request)
    {
        // default breadcumbs
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Management', 'link' => '#', 'page' => ''],
            ['title' => 'Users', 'link' => route('users.index'), 'page' => '']
        ];

        // Checking parameters incoming
        if ($request->param == 'add') {
            $breadCumbs[] = ['title' => 'Add User', 'link' => route('users.form', ['param' => 'add', 'id' => Crypt::encrypt('null')]), 'page' => 'aria-current="page"'];
            $pageTitle = 'Add User';
            $user = null;
            $paramForm = Crypt::encrypt('save');
        } elseif ($request->param == 'edit') {
            $breadCumbs[] = ['title' => 'Edit User', 'link' => route('users.form', ['param' => 'edit', 'id' => $request->id]), 'page' => 'aria-current="page"'];
            $pageTitle = 'Edit User';
            $user = User::findOrFail(Crypt::decrypt($request->id));
            $paramForm = Crypt::encrypt('update');
        } else {
            return redirect()->route('users.index')->with('error', 'Invalid Request');
        }

        $data = [
            'title' => $pageTitle . ' - Laundry Management System',
            'pageTitle' => $pageTitle,
            'breadCumbs' => $breadCumbs,
            'user' => $user,
            'paramForm' => $paramForm,
        ];

        // Redirect to form user
        return view('user.form-user', $data);
    }

    public function store(Request $request)
    {
    }

    public function destroy(Request $request)
    {
    }

    public function block(Request $request)
    {
    }
}
