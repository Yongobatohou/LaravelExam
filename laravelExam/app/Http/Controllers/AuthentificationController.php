<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthentificationController extends Controller
{
    public function get_login(){
        return view('Auth.login');
    }

    public function login(LoginRequest $loginRequest){
        $connect = $loginRequest->only('email', 'password');

        if(Auth::attempt($connect)){
            return redirect()->route('home');
        }

        return back();
     }



    public function get_register(){
        return view('Auth.register');
    }

    public function register(RegisterRequest $registerRequest){

        User::create([
            'nom' => $registerRequest->nom,
            'prenom' => $registerRequest->prenom,
            'email' => $registerRequest->email,
            'password' => $registerRequest->password,
        ]);

        return redirect()->route('get.login');
    }
}
