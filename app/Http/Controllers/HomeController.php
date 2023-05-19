<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function edit(){
        return view('home.edit', ['home' => Home::first()]);
    }

    public function update(Request $request) {
        $home = Home::first();
        $home->we_are_prestes = $request->we_are_prestes;
        $home->home_video = $request->home_video;
        $home->save();
        return redirect()->back()->with(['success' => true]);
    }
}
