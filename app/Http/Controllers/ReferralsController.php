<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;     
use App\Models\Referral;

class ReferralsController extends Controller
{
    public function edit () {
        return view ('referrals.edit', ['referrals' => Referral::first()]);
    }

    public function get () {
        return response()->json(Referral::first());
    }

    public function update (Request $request) {
        $referral = Referral::first();
        $referral->referral_text = $request->referral_text;
        $referral->referral_url = $request->referral_url;
        
        if ($request->hasFile('referral_image') && $request->file('referral_image')->isValid()) {
            if (Storage::exists($request->referral_image)) {
                Storage::delete($request->referral_image);
            }

            $upload = Storage::put('public/referrals', $request->referral_image);

            if (!$upload) {
                return response()->json(['error' => 'Falha ao fazer upload']);
            }

            $referral->referral_image = str_replace('public', '/storage', $upload);

        }

        $referral->save();

        return redirect()->back()->with(['success' => true]);

    }
}
