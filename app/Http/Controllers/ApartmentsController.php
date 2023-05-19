<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use Illuminate\Support\Facades\Storage;

class ApartmentsController extends Controller
{
    public function index ($enterpriseId) {
        $apartments = Apartment::where('enterprise_id', $enterpriseId)->get();
        return view('enterprises.apartments.index', ['enterpriseId' => $enterpriseId, 'apartments' => $apartments ]);
    }

    public function store ($enterpriseId, Request $request) {
        $apartment = new Apartment;
        $apartment->enterprise_id = $enterpriseId;
        $apartment->dormitories = $request->dormitories;
        $apartment->suites = $request->suites;
        $apartment->square_meters = $request->square_meters;
        $apartment->garden = $request->garden || 0;

        if ($request->hasFile('floor_plan') && $request->file('floor_plan')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/floor_plans', $request->floor_plan);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $apartment->floor_plan = str_replace('public', '/storage', $upload);

        }

        $apartment->save();

        return redirect()->back()->with(['success' => true]);


    }

    public function update($enterpriseId, $apartmentId, Request $request) {
        $apartment = Apartment::find($apartmentId);
        if (!empty($apartment)){
            $apartment->enterprise_id = $enterpriseId;
            $apartment->dormitories = $request->dormitories;
            $apartment->suites = $request->suites;
            $apartment->square_meters = $request->square_meters;
            $apartment->garden = $request->garden || 0;

            if ($request->hasFile('floor_plan') && $request->file('floor_plan')->isValid()) {
                if (Storage::exists($request->icon)) {
                    Storage::delete($request->icon);
                }

                $upload = Storage::put('public/enterprises/floor_plans', $request->floor_plan);

                if (!$upload) {
                    return response()->json(['error' => 'Falha ao fazer upload']);
                }

                $apartment->floor_plan = str_replace('public', '/storage', $upload);

            }

            $apartment->save();

            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }

    }

    public function destroy ($enterpriseId, $apartmentId) {
        $apartment = Apartment::find($apartmentId);
        if (!empty($apartment)){

            $apartment->delete();

            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
    }
}
