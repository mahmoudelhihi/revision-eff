<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{

    public function auth()
    {
        Auth::logout();
        return view('auth.index');
    }

    public function authi()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);

        // dd($user);
        // login
        if(Auth::attempt([
            'email' => $request['email'],
            'password' => $request['password']]
        )){
            $request->session()->regenerate();
            return redirect()->route('depart_index');
        }

        // error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function login(Request $request)
    {

        if(Auth::attempt([
            'email' => $request['email'],
            'password' => $request['password']]
        )){
            $request->session()->regenerate();
            return redirect()->route('depart_index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
