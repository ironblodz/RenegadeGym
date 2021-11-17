<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('gm.index')->with('menuOption', 'I');
    }

    public function Sobrenos(){
        return view ('gm.Sobrenos')->with('menuOption', 'B');
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

    public function inscricao(){
        return view ('gm.inscricao')->with('menuOption', 'O');
    }

}
