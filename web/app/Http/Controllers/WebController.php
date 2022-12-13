<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WebController extends Controller
{
    public function login(){
        return Inertia::render('Login', [
            'title' => "teste",
        ]);
    }

    public function dash(){
        return Inertia::render('Dash', [
            'title' => "teste",
        ]);
    }

    public function  home(){
        return Inertia::render('Home', [
            'title' => "teste",
        ]);
    }
}
