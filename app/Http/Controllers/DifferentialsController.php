<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Differential;


class DifferentialsController extends Controller
{
    public function index () {
        $differentials = Differential::all();
        return view('differentials.index', ['differentials' => $differentials]);
    }

    public function store (Request $request) {
        $differential = new Differential;
        $differential->title = $request->title;
        $differential->differential = $request->text;
        if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/differentials/images', $request->icon);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $differential->icon = str_replace('public', '/storage', $upload);

        }

        $differential->save();

        return redirect()->back()->with(['success' => true]);
        
    }

    public function update ($differentialId, Request $request) {
        $differential = Differential::find($differentialId);
        if (!empty($differential)) {
            $differential->title = $request->title;
            $differential->differential = $request->text;
            if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
                if (Storage::exists($request->icon)) {
                    Storage::delete($request->icon);
                }

                $upload = Storage::put('public/differentials/images', $request->icon);

                if (!$upload) {
                    return response()->json(['error' => 'Falha ao fazer upload']);
                }

                $differential->icon = str_replace('public', '/storage', $upload);
            }

        
            $differential->save();

            return redirect()->back()->with(['success' => true]);

        } else {
        return redirect()->back()->with(['error' => true]);

        }

    }

    public function destroy($differentialId) {
        $differential = Differential::find($differentialId);
        if (!empty($differential)) {

            $differential->delete();

            return redirect()->back()->with(['success' => true]);

        } else {
        return redirect()->back()->with(['error' => true]);

        }
    }
}
