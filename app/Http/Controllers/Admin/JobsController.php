<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use Illuminate\Http\Request;

class JobsController extends AdminController
{
    public function index (){
        $jobs = Job::orderBy('created_at', 'desc')->get();

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create(){
        return view('admin.jobs.create');
    }

    public function store(Request $request){
        $job = Job::create($request->all());

        $job->save();

        $this->_setFlashMessage($request,'success', "Pracovná pozícia <b>$job->name_sk</b> bola vytvorená");

        return redirect()->route('jobs.index');
    }

    public function edit($id){
        $job = Job::findOrFail($id);

        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, $id){
        $job = Job::findOrFail($id);

        $job->update($request->all());

        $job->save();

        $this->_setFlashMessage($request, 'success', "Pracovná pozícia <b>$job->name_sk</b> bola zmenená");

        return back();
    }

    public function delete(Request $request, $id){
        $job = Job::findOrFail($id);

        $this->_setFlashMessage($request, 'success', "Pracovná pozícia <b>$job->name_sk</b> bola vymazaná" );

        $job->delete();

        return redirect()->route('jobs.index');
    }
}
