<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsStoreRequest;
use App\Http\Requests\JobsUpdateRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobsStoreRequest $request)
    {
        //

        
        $job = new Job;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->salary = $request->salary;
        $job->url = $request->url;
        $job->available = $request->boolean('available');
        $job->save();
        return redirect()->route('jobs.index')->with('success', 'Successful created new job!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // echo $id;
        $job = Job::find($id);
        return view('admin.jobs.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Job::find($id);
        return view('admin.jobs.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobsUpdateRequest $request, string $id)
    {
        //
        $job = Job::find($id);
        $job->title = $request->title;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->salary = $request->salary;
        $job->url = $request->url;
        $job->available = $request->boolean('available');
        $job->save();
        return redirect()->route('jobs.index')->with('success', 'Successful updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Successful deleted!');
    }
}
