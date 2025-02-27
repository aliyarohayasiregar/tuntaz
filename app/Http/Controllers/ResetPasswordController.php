<?php

namespace App\Http\Controllers;

use Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request,$token=null){
        return view("'auth.passwords.reset")->with(["token"=>$token,"email"=> $request->email]);
    }

    public function reset(Request $request){
        $request ->validate([  
            "token"=> "required",
            "email"=> "required|email",
            "password"=> "required|string|min:8|confirmed"
            ]);

        $status = Password::reset($request -> only("email","password","password_confirmation"."token"),
        function ($user, $password) {
        $user->forceFill([
        'password'=>Hash::make($password),
        'remember_token'=>Str::random(60),
        ])->save();
        }
        );

        return $status===Password::PASSWORD_RESET ? redirect('/login')->with('status',_($status)) : back()->withErrors(['email'=>[_($status)]]);
    
    }
}
