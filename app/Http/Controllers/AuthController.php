<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerPost(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($user->save()){
            event(new Registered($user));
        }

        return back()->with('status', 'اکانت با موفقیت ساخته شد');
    }


    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->get('remember'))){
            return redirect()->route('dashboard')->with('success', 'ورود موفقیت آمیز بود');
        }
        return back()->with('status', 'اطلاعات وارد شده اشتباه است');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth');
    }

    public function show_profile(){
        return view('profile');
    }

    public function edit_profile(Request $request){

        $validatedData = $request->validate([
            'first_name' => 'max:60|nullable',
            'last_name' => 'max:60|nullable',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'id_code' => 'nullable|integer|unique:users,id_code,' . Auth::user()->id,
            'phone_number' => 'nullable|integer|unique:users,phone_number,' . Auth::user()->id,
            'card_number' => 'nullable',
        ]);

        $user =Auth::user();

        $user->update($validatedData);

        return back()->with('status', 'پروفایل با موفقیت بروز رسانی شد');
    }
}
