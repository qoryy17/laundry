<?php

namespace App\Http\Controllers\Membership;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class MembershipController extends Controller
{
    public function index()
    {
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Management', 'link' => '#', 'page' => ''],
            ['title' => 'Memberships', 'link' => route('membership.index'), 'page' => 'aria-current="page"']
        ];

        $data = [
            'title' => 'Memberships Management - Laundry Management System',
            'pageTitle' => 'Memberships Management',
            'breadCumbs' => $breadCumbs,
        ];

        return view('membership.membership', $data);
    }

    public function form(Request $request)
    {
        // default breadcumbs
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Management', 'link' => '#', 'page' => ''],
            ['title' => 'Memberships', 'link' => route('membership.index'), 'page' => '']
        ];

        // Checking parameters incoming
        if ($request->param == 'add') {
            $breadCumbs[] = ['title' => 'Add Membership', 'link' => route('membership.form', ['param' => 'add', 'id' => Crypt::encrypt('null')]), 'page' => 'aria-current="page"'];
            $pageTitle = 'Add Membership';
            $membership = null;
            $paramForm = Crypt::encrypt('save');
        } elseif ($request->param == 'edit') {
            $breadCumbs[] = ['title' => 'Edit Membership', 'link' => route('membership.form', ['param' => 'edit', 'id' => $request->id]), 'page' => 'aria-current="page"'];
            $pageTitle = 'Edit Membership';
            $membership = '';
            $paramForm = Crypt::encrypt('update');
        } else {
            return redirect()->route('membership.index')->with('error', 'Invalid Request');
        }

        $data = [
            'title' => $pageTitle . ' - Laundry Management System',
            'pageTitle' => $pageTitle,
            'breadCumbs' => $breadCumbs,
            'membership' => $membership,
            'paramForm' => $paramForm,
        ];

        // Redirect to form user
        return view('membership.form-membership', $data);
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
