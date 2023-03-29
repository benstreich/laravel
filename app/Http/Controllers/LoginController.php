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


    
    public function add()
    {

        $request = request();


        $application = new User();
        $application->name = "Ben";
        $application->email = "ben.streich@icloud.com";
        $application->password = Hash::make("adminpw");

        $application->save();

        return redirect('/events_logedin');
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
ddd("DDDDDDDDDDDDDDDDDDDDDDDDDd");
            return redirect()->intended('/events_logedin');
        } else {

            return back()->with('fail', 'Anmeldung fehlgeschlagen');
        }
    }

    public function logedin()
    {
        return view('/events_logedin');
    }




}