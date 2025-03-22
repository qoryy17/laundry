<?php

namespace App\Http\Controllers\Promo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class PromoServiceController extends Controller
{
    public function index()
    {
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Promo Service', 'link' => route('promo-service.index'), 'page' => 'aria-current="page"']
        ];

        $data = [
            'title' => 'Promo Service - Laundry Management System',
            'pageTitle' => 'Promo Service',
            'breadCumbs' => $breadCumbs,
        ];

        return view('promo-service.promo-service', $data);
    }

    public function form(Request $request)
    {
        // default breadcumbs
        $breadCumbs = [
            ['title' => 'Dashboard', 'link' => route('dashboard.index'), 'page' => ''],
            ['title' => 'Promo Service', 'link' => route('promo-service.index'), 'page' => '']
        ];

        // Checking parameters incoming
        if ($request->param == 'add') {
            $breadCumbs[] = ['title' => 'Add Promo Service', 'link' => route('promo-service.form', ['param' => 'add', 'id' => Crypt::encrypt('null')]), 'page' => 'aria-current="page"'];
            $pageTitle = 'Add Promo Service';
            $promoService = null;
            $paramForm = Crypt::encrypt('save');
        } elseif ($request->param == 'edit') {
            $breadCumbs[] = ['title' => 'Edit Promo Service', 'link' => route('promo-service.form', ['param' => 'edit', 'id' => $request->id]), 'page' => 'aria-current="page"'];
            $pageTitle = 'Edit Promo Service';
            $promoService = '';
            $paramForm = Crypt::encrypt('update');
        } else {
            return redirect()->route('promo-service.index')->with('error', 'Invalid Request');
        }

        $data = [
            'title' => $pageTitle . ' - Laundry Management System',
            'pageTitle' => $pageTitle,
            'breadCumbs' => $breadCumbs,
            'promoService' => $promoService,
            'paramForm' => $paramForm,
        ];

        // Redirect to form user
        return view('promo-service.form-promo-service', $data);
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
