<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index () {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function update($userId, Request $request) {
        $user = User::find($userId);
        $user->name = $request->name;
        $user->whatsapp = $request->whatsapp;
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with(['success' => true]);

    }

    public function store (Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->whatsapp = $request->whatsapp;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect()->back()->with(['success' => true]);
    }

    public function destroy($userId) {
        $user = User::find($userId) ;
        if (!empty($user)){
            $user->delete();
            return redirect()->back()->with(['success' => true]);
        } else {
            return redirect()->back()->with(['error' => true]);
        }
    }
}
