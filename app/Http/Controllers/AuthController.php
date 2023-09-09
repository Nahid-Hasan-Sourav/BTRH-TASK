<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){

    }

    public function register(){

    }

    public function loginView(){
        return view('websites.auth.login');
    }
    public function registerView(){
        return view('websites.auth.reegister');

    }
}
