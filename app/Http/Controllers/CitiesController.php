<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Enterprise;
use Illuminate\Support\Facades\Storage;

class CitiesController extends Controller
{
    public function index () {
        $cities = City::all();
        return view('cities.index', ['cities' => $cities, 'enterpriseCities' => array_unique(Enterprise::all()->pluck('city')->toArray())]);
    }

    public function getCities(){
        return response()->json(array_unique(Enterprise::all()->pluck('city')->toArray()));
    }

    public function store (Request $request) {
  
        $city = new City;
        $city->city_name = $request->city_name;
        $city->city_describe = $request->city_describe;
        if ($request->hasFile('city_banner') && $request->file('city_banner')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/cities/images', $request->city_banner);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $city->city_banner = str_replace('public', '/storage', $upload);

        }
        $city->save();
        return redirect()->back()->with(['success' => true]);
    }

    public function update ($cityId, Request $request) {
        $city = City::find($cityId);
        if (!empty($city)) {
            $city->city_name = $request->city_name;
            $city->city_describe = $request->city_describe;
            if ($request->hasFile('city_banner') && $request->file('city_banner')->isValid()) {
                if (Storage::exists($request->icon)) {
                    Storage::delete($request->icon);
                }
    
                $upload = Storage::put('public/cities/images', $request->city_banner);
    
                if (!$upload) {
                    return response()->json(['error' => 'Falha ao fazer upload']);
                }
    
                $city->city_banner = str_replace('public', '/storage', $upload);
    
            }
            $city->save();
            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
    }

    public function destroy ($cityId) {
        $city = City::find($cityId);
        if (!empty($city)) {
            $city->delete();
            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
    }
}
