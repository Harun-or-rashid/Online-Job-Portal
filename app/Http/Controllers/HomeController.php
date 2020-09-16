<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('applicant.index', [
            "jobs" => Job::all()
        ]);
    }

    public function apply($id)
    {
        if (empty(auth()->user()->resume)) {
            return redirect()->route('home.edit')->with('warning', 'For apply on job, You have to upload your resume');
        }

        User::find(auth()->id())->jobs()->attach($id, ['status' => 0]);

        if (User::find(auth()->id())->jobs->contains($id)) {
            return back()->with('success', 'Successfully updated');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function cancelApply($id)
    {
        $isDetach = User::find(auth()->id())->jobs()->detach($id);

        if ($isDetach) {
            return back()->with('success', 'Successfully Cancel');
        } else {
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
