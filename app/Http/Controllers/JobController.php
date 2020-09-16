<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.jobs.list', [
            'jobs' => Company::find(auth()->id())->jobs()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jobs.create', ['categories' => []]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'salary' => 'nullable|string',
            'location' => 'required',
            'country' => 'required',
        ]);

        $isCreated = Company::find(auth()->id())->jobs()->create($data);
        if ($isCreated->exists()) {
            return redirect()->back()->with('success', 'Successfully Job Created');
        } else {
            return redirect()->back()->with('error', 'Somthing Went Wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.jobs.edit', [
            'job' => Company::find(auth()->id())->jobs()->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'salary' => 'nullable|string',
            'location' => 'required',
            'country' => 'required',
        ]);
        // dd(Company::find(auth()->id())->jobs()->find($id)->update($data));
        if (Company::find(auth()->id())->jobs()->find($id)->update($data)) {
            return back()->with('success', 'Successfully Updated');
        } else {
            return back()->with('success', 'Successfully Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd(Company::find(auth()->id())->jobs()->find($id)->delete());
        if (Company::find(auth()->id())->jobs()->find($id)->delete()) {
            return back()->with('success', 'Successfully Deleted');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
