<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registerUser()
    {
        $request = request();

        
        $request->validate( [
            'name' => 'required|max:25',
            'email' => 'required|email',
            'password' => 'required|max:255|min:5',
        ],
            
        );

        $user = new User();
        $user->name = $request->get('name');
        $passwordUnhashed = $request->get('password');
        $user->email = $request->get('email');
        $user->password = Hash::make($passwordUnhashed);
        $user->save();

        return redirect('/events_logedin');
    }

    public function register()
    {
        return view('register');
    }
}