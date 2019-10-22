<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEmailRequest;
use App\Job;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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

    public function email(ContactEmailRequest $request){
        $recipient = env('MAIL_RECIPIENT', 'info@demi.sk');

        Mail::to($recipient)->send(new ContactMail($request->all()));

        if(count(Mail::failures()) > 0){
            $error = trans('texts.Your message could not be send');
        }else{
            $success = trans('texts.Your message was sent successfully');
        }

        return view('frontend.pages.contact', compact('error', 'success'));
    }
}
