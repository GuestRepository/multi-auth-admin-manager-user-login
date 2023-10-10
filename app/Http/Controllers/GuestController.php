<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function welcomePage()
    {
        return view('welcome');
    }

    public function contact(){
        return view('pages.contact');
    }
   
    public function candidates(){
        return view('pages.candidates');
    }

    public function browsejob(){
        return view('pages.browsejobs');

    }

    public function blog(){
        return view('pages.blog');
    }

    public function newpost(){
        return view('pages.new-post');
    }

    public function jobpost(){
        return view('pages.job-post');
    }
}
