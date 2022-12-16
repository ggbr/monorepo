<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function login(){
        return Inertia::render('Login', [
            'title' => "teste",
        ]);
    }

    public function dash(){
        $user = Auth::user();
        
        return Inertia::render('Dash', [
            'title' => "teste",
            'user'=> $user,
        ]);
    }

    public function  home(){
        return Inertia::render('Home', [
            'title' => "teste",
        ]);
    }

    public function logar(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dash');
        }
    }
}
