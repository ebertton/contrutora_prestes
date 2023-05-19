<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index() {
        return view('login.form');
    }

    public function login (Request $request) {
        $usuario = $request->only('email', 'password');
        if (Auth::attempt($usuario))
            return redirect()->route('home');
        return redirect()->back()->withErrors(['msg' => 'Usuario invalido']);

    }

    public function logout() {
        Auth::logout();
        return redirect('/admin/login');
    }

    public function recoverPassword () {
        return view ('login.recover-password');
    }

    public function actionRecoverPassword (Request $request) {
        
        $user = User::whereEmail($request->email)->first();
        if(empty($user))
            return response()->json('E-mail não encontado', 400);
        $randomStr = uniqid();

        $user->password = Hash::make($randomStr);
        $user->save();
        Mail::send('mail.recover-password', ['request' => $request->all(), 'newpassword' => $randomStr], function ($m) use ($request) {
            $m->to($request->email)->subject('Recuperação de senha');
        });
        
        return redirect('/admin')->with(['success' => true]);
    }

    public function requestAccess() {
        return view('login.request-access');
    }

    public function actionRequestAccess(Request $request) {

        Mail::send('mail.request-access', ['request' => $request->all()], function ($m) use ($request) {
            $m->to(env('MAIL_ADMIN_ADDRESS'))->subject('Solicitação de acesso');
        });
        
        return redirect('/admin')->with(['success' => true]);
    }
    
    public function changePassword(Request $request) {
        $user = Auth::user();

        
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return redirect()->back()->with(['success' => true]);
    
    }
}
