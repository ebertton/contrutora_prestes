<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index ($enterpriseId) {
        $images = Image::where('enterprise_id', $enterpriseId)->get();
        return view('enterprises.images.index', ['enterpriseId' => $enterpriseId, 'images' => $images ]);
    }

    public function store ($enterpriseId, Request $request) {

        $image = new Image;
        $image->enterprise_id = $enterpriseId;
        $image->type = $request->type;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            if (Storage::exists($request->icon)) {
                Storage::delete($request->icon);
            }

            $upload = Storage::put('public/enterprises/images', $request->image);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $image->image = str_replace('public', '/storage', $upload);

        }

        $image->save();

        return redirect()->back()->with(['success' => true]);
    }

    public function update ($enterpriseId, $imageId, Request $request) {
        $image = Image::find($imageId);

        if (!empty($image)) {
            $image->enterprise_id = $enterpriseId;
            $image->type = $request->type;

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                if (Storage::exists($request->icon)) {
                    Storage::delete($request->icon);
                }

                $upload = Storage::put('public/enterprises/images', $request->image);

                if (!$upload) {
                    return response()->json(['error' => 'Falha ao fazer upload']);
                }

                $image->image = str_replace('public', '/storage', $upload);

            }

            $image->save();

            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
    }

    public function destroy ($enterpriseId, $imageId) {
        $image = Image::find($imageId);

        if (!empty($image)) {

            $image->delete();

            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
    }
}
