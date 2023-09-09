<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('websites.welcome');
    }

    public function home(){
        return view('websites.Home.Home');
    }
}
