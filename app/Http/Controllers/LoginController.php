<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        $email=$request->email;

        $password=$request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            
            return redirect()->route('home');
        }

        $errors=[
            'message'=>'El usuario o contraseña no coincide',
        ];

        return redirect()->back()->withErrors($errors);
    }

    public function logout(Request $request){

        Auth::logout();

        return redirect()->route('login');
    }
}
