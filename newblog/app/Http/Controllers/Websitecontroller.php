<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Websitecontroller extends Controller
{
    public function index(){
        return view('website.home');
    }
    public function history(){
        return view('website.history');
    }

    public function ourservices(){
        return view('website.ourservices');
    }
    public function ourprograms(){
        return view('website.ourprograms');
    }


    public function service(){
        return view('website.single_service');
    }
    public function program(){
        return view('website.single_program');
    }

    public function news(){
        return view('website.news');
    }
    public function blog(){
        return view('website.blog');
    }

    public function contact(){
        return view('website.contact');
    }

    public function faq(){
        return view('website.help');
    }
    public function gallery(){
        return view('website.gallery');
    }
    public function myaccount(){
        return view('website.myaccount');
    }
    public function editprofile(){
    return view('website.editprofile');
     }
    public function booking(){
        return view('website.booking');
    }
}
