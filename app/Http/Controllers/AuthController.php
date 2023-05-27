<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return back()->with('success', 'اکانت با موفقیت ساخته شد');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)){
            return redirect()->route('dashboard')->with('success', 'ورود موفقیت آمیز بود');
        }
        return back()->with('error', 'اطلاعات وارد شده اشتباه است');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
