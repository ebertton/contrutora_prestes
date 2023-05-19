<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Land;
use Illuminate\Support\Facades\Storage;

class LandsController extends Controller
{
    public function index($enterpriseId){
        return view ('enterprises.lands.index', ['enterpriseId' => $enterpriseId, 'lands' => Land::where('enterprise_id', $enterpriseId)->get()]);
    }

    public function store($enterpriseId, Request $request) {
        $land = new Land;
        $land->enterprise_id = $enterpriseId;
        $land->square_meters = $request->square_meters;
        if ($request->hasFile('floor_plan') && $request->file('floor_plan')->isValid()) {
            if (Storage::exists($request->floor_plan)) {
                Storage::delete($request->floor_plan);
            }

            $upload = Storage::put('public/enterprise/lands', $request->floor_plan);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $land->floor_plan = str_replace('public', '/storage', $upload);
        }

        $land->save();
        return redirect()->back()->with(['success' => true]);

    }

    public function update($enterpriseId, $landId, Request $request) {
        $land = Land::find($landId);
        if (!empty($land)){
            $land->enterprise_id = $enterpriseId;
            $land->square_meters = $request->square_meters;
            if ($request->hasFile('floor_plan') && $request->file('floor_plan')->isValid()) {
                if (Storage::exists($request->floor_plan)) {
                    Storage::delete($request->floor_plan);
                }

                $upload = Storage::put('public/enterprise/lands', $request->floor_plan);

                if (!$upload) {
                    return response()->json(['error' => 'Falha ao fazer upload']);
                }

                $land->floor_plan = str_replace('public', '/storage', $upload);
            }

            $land->save();

            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
        

    }

    public function destroy($enterpriseId, $landId, Request $request) {
        $land = Land::find($landId);
        if (!empty($land)){
        
            $land->delete();

            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
        

    }
}
