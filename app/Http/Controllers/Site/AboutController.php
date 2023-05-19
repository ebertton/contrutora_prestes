<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Differential;
use App\Models\Achievement;

class AboutController extends Controller
{
    public function index () {
        $content = array (
            'about' => About::first(),
            'differentials' => Differential::all(),
            'achievements' => Achievement::orderBy('year', 'ASC')->get(),
        );
        return view('site.about.index', ['content' => $content]);
    }
}
