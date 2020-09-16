<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Company::find(auth()->id())->jobs);
        return view('backend.index', [
            'jobs' => Company::find(auth()->id())->jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
    public function accept($jobid, $userid)
    {
        if (User::find($userid)->jobs()->updateExistingPivot($jobid, ['status' => 1])) {
            return back()->with('success', 'Successfully Accepted');
        }
        return back()->with('error', 'Something Went Wrong!');
    }
    public function reject($jobid, $userid)
    {
        if (User::find($userid)->jobs()->updateExistingPivot($jobid, ['status' => 2])) {
            return back()->with('success', 'Successfully Rejected');
        }
        return back()->with('error', 'Something Went Wrong!');
    }
}
