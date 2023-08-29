<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function registerPage(){

        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|string|ends_with:@gmail.com|email',
            'phoneNumber' => 'required|string|starts_with:08',
            'password' => 'required|string|min:6|max:12'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'password' => Hash::make($request->password)
        ]);

        return redirect(route('homepage'));
    }

    public function login(){

        return view('login');
    }

    public function authenticate(Request $request) 
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
