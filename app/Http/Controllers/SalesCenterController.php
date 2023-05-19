<?php

namespace App\Http\Controllers;
use App\Models\SalesCenter;
use App\Models\City;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class SalesCenterController extends Controller
{
    public function index(){
        $salesCenter = SalesCenter::with('cities')->get();
        return view('sales_center.index', ['salesCenter' => $salesCenter]);
    }

    public function store (Request $request) {
        $salesCenter = new SalesCenter;
        $city = City::where('city_name', $request->city)->first();
        if ( !empty($city->id)){
            $salesCenter->city = $city->id;
        } else {
            return redirect()->back()->with(['city_error' => 'Cadastre a cidade primeiro!']);
        }
        
        $salesCenter->zip_code = $request->zip;
        $salesCenter->street = $request->street;
        $salesCenter->neighborhood = $request->neighborhood;
        $salesCenter->state = $request->state;
        $salesCenter->complement = $request->complement;
        $salesCenter->number = $request->number;
        $salesCenter->mail = $request->email;
        $salesCenter->phone = $request->phone;
        
        $salesCenter->save();
        return redirect()->back()->with(['success' => true]);
    }

    public function update ($salesCenterId, Request $request) {
        $salesCenter = SalesCenter::find($salesCenterId);
        if(!empty($salesCenter)) {
            $city = City::where('city_name', $request->city)->first();
            if ( !empty($city->id)){
                $salesCenter->city = $city->id;
            } else {
                return redirect()->back()->with(['error' => 'Cadastre a cidade primeiro!']);
            }
        
            $salesCenter->zip_code = $request->zip;
            $salesCenter->street = $request->street;
            $salesCenter->neighborhood = $request->neighborhood;
            $salesCenter->state = $request->state;
            $salesCenter->complement = $request->complement;
            $salesCenter->number = $request->number;
            $salesCenter->mail = $request->email;
            $salesCenter->phone = $request->phone;
            
            $salesCenter->save();
            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);           
        }
    }

    public function destroy ($salesCenterId) {
        $salesCenter = SalesCenter::find($salesCenterId);
        if(!empty($salesCenter)) {
            $salesCenter->delete();
            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);           
        }
    }
}
