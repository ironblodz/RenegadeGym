<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function master(){
        return view ('master')->with('menuOption', 'I');
    }

    public function index(){
        return view('gm.index')->with('menuOption', 'I');
    }

    public function aboutus(){
        return view ('gm.aboutus')->with('menuOption', 'B');
    }

    public function clube(){
        return view ('gm.clube')->with('menuOption', 'C');
    }

    public function blog(){
        return view ('gm.blog')->with('menuOption', 'D');
    }

    public function contacts(){
        return view ('gm.contacts')->with('menuOption', 'E');
    }
    public function login(){
        return view ('gm.login')->with('menuOption', 'F');
    }

    public function registarlogin(){
        return view ('gm.registarlogin');
    }


}
