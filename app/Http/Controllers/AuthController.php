<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }

    public function doLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect("/User");
        }
        return back()->withErrors([
            "message" => "ไม่พบข้อมูล"
        ]);
    }

    public function register(){
        return view('Auth.register');
    }

    public function doRegister(Request $request){

    }

    public function logout(){
        Auth::logout();
        return redirect('/Auth/login');

    }
}
