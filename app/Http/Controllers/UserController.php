<?php

namespace App\Http\Controllers;

use App\User;
use App\Privilege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $privilege = Privilege::all();

        return view('account')->with([
            'title' => 'Profile',
            'privileges' => $privilege
        ]);
    }

    public function update(Request $request){
        $username = $request->username;
        $email = $request->email;
        $position = $request->position;
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        $privilege = Privilege::all();
        $privilege = implode(',', array_column(json_decode($privilege), 'privilegeId'));

        $request->validate([
            'username' => 'required|string|min:6',
            'email' => 'required|email|unique:users,email,'.auth()->user()->id,
            'position' => 'required|integer|in:'.$privilege,
            'confirmPassword' => 'required_with:password|same:password'
        ]);
 
        $profile = User::find(auth()->user()->id);
        $profile->name = $username;
        $profile->email = $email;
        $profile->privilegeId = $position;
        $profile->password = $password ? Hash::make($password):auth()->user()->password;
        $profile->update();

        return redirect()->back()->with(['msg' => 'User account updated successfully']);
    }

    public function account(Request $request){
        $privilege = Privilege::all();

        return view('register')->with([
            'title' => 'Register',
            'privileges' => $privilege
        ]);
    }

    public function register(Request $request){
        $username = $request->username;
        $email = $request->email;
        $position = $request->position;
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        $privilege = Privilege::all();
        $privilege = implode(',', array_column(json_decode($privilege), 'privilegeId'));

        $request->validate([
            'username' => 'required|string|min:6',
            'email' => 'required|email|unique:users,email',
            'position' => 'required|integer|in:'.$privilege,
            'password' => 'required|string|min:6|',
            'confirmPassword' => 'required|same:password|min:6'
        ]);

        $register = User::create([
            'name' => $username,
            'email' => $email,
            'privilegeId' => $position,
            'password'=> Hash::make($password)
        ]);
        return redirect()->back()->with(['msg' => 'User account created successfully']);
    }
}
