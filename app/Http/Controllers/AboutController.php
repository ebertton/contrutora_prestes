<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function edit () {
        return view('about.edit', ['about' => About::first()]);
    }

    public function update (Request $request) {

        $about = About::first();
        $about->about_video = $request->about_video;
        $about->your_home = $request->your_home;
        $about->mission = $request->mission;
        $about->vision = $request->vision;
        $about->values = $request->values;
        $about->history = nl2br($request->history);
        $about->our_enterprises = $request->our_enterprises;
        $about->life_institute_text = $request->life_institute;
        $about->ceo_name = $request->ceo;
        $about->ceo_history = $request->ceo_history;
        $about->ceo_quote = $request->ceo_quote;
        $about->cities = $request->cities;
        $about->enterprises_delivered = $request->enterprises_delivered;
        $about->housing_units = $request->housing_units;
        $about->direct_collaborators = $request->direct_collaborators;
        $about->undirect_collaborators = $request->undirect_collaborators;

        if ($request->hasFile('ceo_image') && $request->file('ceo_image')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/about/images', $request->ceo_image);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $about->ceo_image = str_replace('public', '/storage', $upload);

        }

        if ($request->hasFile('life_institute_image_1') && $request->file('life_institute_image_1')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/about/images', $request->life_institute_image_1);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $about->life_institute_image_1 = str_replace('public', '/storage', $upload);

        }

        if ($request->hasFile('your_home_image') && $request->file('your_home_image')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/about/images', $request->your_home_image);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $about->your_home_image = str_replace('public', '/storage', $upload);

        }

        if ($request->hasFile('life_institute_image_2') && $request->file('life_institute_image_2')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/about/images', $request->life_institute_image_2);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $about->life_institute_image_2 = str_replace('public', '/storage', $upload);

        }

        $about->save();

        return redirect()->back()->with(['success' => true]);
    }
}
