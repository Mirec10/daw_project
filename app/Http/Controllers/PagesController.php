<?php

namespace App\Http\Controllers;

use App\Client;
use App\Job;

class PagesController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function services(){
        return view('frontend.pages.services');
    }

    public function cars(){
        return view('frontend.pages.cars');
    }

    public function jobs(){
        $jobs = Job::orderBy('created_at', 'desc')->get();

        return view('frontend.pages.jobs', compact('jobs'));
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
}
