<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementsController extends Controller
{
    public function index () {
        $achievements = Achievement::all();
        return view('achievements.index', ['achievements' => $achievements]);
    }

    public function store (Request $request) {
        $achievement = new Achievement;
        $achievement->year = $request->year;
        $achievement->achievement = $request->text;
        $achievement->save();
        return redirect()->back()->with(['success' => true]);
    }

    public function update ($achievementId, Request $request) {
        $achievement = Achievement::find($achievementId);
        if (!empty($achievement)) {
            $achievement->year = $request->year;
            $achievement->achievement = $request->text;
            $achievement->save();
            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
    }

    public function destroy ($achievementId) {
        $achievement = Achievement::find($achievementId);
        if (!empty($achievement)) {
            $achievement->delete();
            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
    }
}
