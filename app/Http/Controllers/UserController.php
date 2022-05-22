<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("signin");
    }

    public function signin(Request $request){
        
        $credentials  = $request->only(['email','password']);
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::attempt($credentials, $remember_me)) {
            // $request->session()->regenerate();
            return redirect()->route('dashboard')->with("status", "You're logged in!"); //Redirect the user to the page intended to go to, with the dashboard page as default
        }
        else{
            return back()->with('status', 'Incorrect login info!');
        }
    }

    public function logout(){
        // Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }
}
