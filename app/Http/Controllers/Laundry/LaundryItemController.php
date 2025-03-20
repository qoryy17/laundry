<?php

namespace App\Http\Controllers\Laundry;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class LaundryItemController extends Controller
{
    public function index()
    {
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Management', 'link' => '#', 'page' => ''],
            ['title' => 'Laundry Items', 'link' => route('laundry-item.index'), 'page' => 'aria-current="page"']
        ];

        $data = [
            'title' => 'Laundry Items Management - Laundry Management System',
            'pageTitle' => 'Laundry Items Management',
            'breadCumbs' => $breadCumbs,
        ];

        return view('laundry-item.laundry-item', $data);
    }

    public function form(Request $request)
    {
        // default breadcumbs
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Management', 'link' => '#', 'page' => ''],
            ['title' => 'Laundry Items', 'link' => route('laundry-item.index'), 'page' => '']
        ];

        // Checking parameters incoming
        if ($request->param == 'add') {
            $breadCumbs[] = ['title' => 'Add Laundry Item', 'link' => route('laundry-item.form', ['param' => 'add', 'id' => Crypt::encrypt('null')]), 'page' => 'aria-current="page"'];
            $pageTitle = 'Add Laundry Item';
            $laundryItem = null;
            $paramForm = Crypt::encrypt('save');
        } elseif ($request->param == 'edit') {
            $breadCumbs[] = ['title' => 'Edit Laundry Item', 'link' => route('laundry-item.form', ['param' => 'edit', 'id' => $request->id]), 'page' => 'aria-current="page"'];
            $pageTitle = 'Edit Laundry Item';
            $laundryItem = '';
            $paramForm = Crypt::encrypt('update');
        } else {
            return redirect()->route('laundry-item.index')->with('error', 'Invalid Request');
        }

        $data = [
            'title' => $pageTitle . ' - Laundry Management System',
            'pageTitle' => $pageTitle,
            'breadCumbs' => $breadCumbs,
            'laundryItem' => $laundryItem,
            'paramForm' => $paramForm,
        ];

        // Redirect to form user
        return view('laundry-item.form-laundry-item', $data);
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
