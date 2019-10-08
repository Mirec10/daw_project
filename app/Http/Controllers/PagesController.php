<?php

namespace App\Http\Controllers;

use App\Client;

class PagesController extends Controller
{
    public function index(){
        $clients = Client::orderBy('created_at', 'desc')->get();

        return view('frontend.pages.index', compact('clients'));
    }

    public function services(){
        return view('frontend.pages.services');
    }

    public function cars(){
        return view('frontend.pages.cars');
    }

    public function jobs(){
        return view('frontend.pages.jobs');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
}
