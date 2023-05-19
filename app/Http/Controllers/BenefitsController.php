<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benefit;

class BenefitsController extends Controller
{
    public function store(Request $request) {
        $benefit = new Benefit;
        $benefit->enterprise_id = $request->enterprise_id;
        $benefit->key = $request->key;
        $benefit->text = $request->benefit;
        $benefit->save();

        return redirect()->back();
    }

    public function destroy($id){
        $benefit = Benefit::find($id);
        $benefit->delete();
        return redirect()->back();
    }
}
