<?php

namespace App\Http\Controllers;

use App\User;
use App\Privilege;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function showLogin(Request $request){
        return view('login')->with(['title' => 'Login']);
    }

    public function postLogin(Request $request){
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])){
            return redirect()->route  ('home');
        }

        return redirect(route('login.show'))->withErrors (['msg'=>'Invalid Login Details!']);
    }

    public function logout(Request $request){
        Auth::logout();

        return redirect(route('login.show'));
    }
}
