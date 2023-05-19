<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalesCenter;

class SalesCenterController extends Controller
{
    public function index () {
        $salesCenter = SalesCenter::with('cities')->get();
        return view ('site.sales-center.index', ['salesCenter' => $salesCenter]);
    }
}
