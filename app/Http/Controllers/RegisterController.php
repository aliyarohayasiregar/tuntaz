<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view("auth.register");
    }

    public function register(Request $request){
        $request->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','string','email','max:255'],
            'password'=>['required','string','min:8'],
        ]);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/login');
    }
}
