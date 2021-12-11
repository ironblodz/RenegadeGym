<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactInfo;

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

    public function contact(){
        return view ('gm.contact')->with('menuOption', 'E');
    }
    public function login(){
        return view ('login')->with('menuOption', 'F');
    }

    public function register(){
        return view ('register');
    }

    public function faq(){
        return view ('gm.faq')->with('menuOption','G');
    }



    public function contactSendEmail(Request $request){
        Mail::to($request->email)->send(new ContactInfo($request));
    }


}
