<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolice;
use Illuminate\Http\Request;

class PrivacyPoliceController extends Controller
{
    public function create()
    {
        $privacy = PrivacyPolice::first();
        return view('privacy-police.edit')->with(compact('privacy'));
    }
    public function edit(Request $request)
    {
        $privacy = PrivacyPolice::first();
        $privacy->text = $request->text;
        $privacy->url = $request->url_privacy;
        $privacy->save();
        return redirect()->back()->with(['success' => true]);

    }

    public function index()
    {
        return response()->json(PrivacyPolice::first());
    }
}
