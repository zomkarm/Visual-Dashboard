<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Shows login page 
     */
    public function login(){
        return view('auth.login');
    }

    /**
     * Shows register page 
     */
    public function register(){
        return view('auth.register');
    }
}
