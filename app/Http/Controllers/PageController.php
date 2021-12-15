<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactInfo;
use App\Models\Post;
use App\Models\Gym;

class PageController extends Controller
{
    public function index(){
        return view('gm.index')->with('menuOption', 'I');
    }

    public function Sobrenos(){
        return view ('gm.Sobrenos')->with('menuOption', 'B');
    }

    public function gym(){
        $gyms = Gym::all();
        return view ('gm.gym', compact('gyms'))->with('menuOption', 'C');
    }

    public function blog(){
        $posts = Post::all();
        return view ('gm.blog', compact('posts'))->with('menuOption', 'D');
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
