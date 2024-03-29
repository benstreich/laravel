<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }


   
    public function loginUser(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],

            [
                'email.required' => 'Email eingeben!',
                'password.required' => 'Passwort eingeben!'
            ],


        );

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/events_logedin');
        } else {
            return back()->with('fail', 'Anmeldung fehlgeschlagen');
        }
    }

    public function logedin()
    {
        return view('/events_logedin');
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');

    }

}