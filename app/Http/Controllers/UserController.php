<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // dd(auth()->user());
        return view('applicant.profile', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = auth()->user();
        $userImage = $user->image;
        $userResume = $user->resume;

        if ($request->hasFile('image')) {
            if (!empty($userImage) && is_file(public_path('users\images\\') . $userImage)) // delete if file exist already
                unlink(public_path('users\images\\') . $userImage);
            $userImage = uniqid(11) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('users\images'), $userImage);
        }

        if ($request->hasFile('resume')) {
            if (!empty($userResume) && is_file(public_path('users\resume\\') . $userResume)) // delete if file exist already
                unlink(public_path('users\resume\\') . $userResume);
            $userResume = uniqid(11) . '.' . $request->file('resume')->getClientOriginalExtension();
            $request->file('resume')->move(public_path('users\resume'), $userResume);
        }

        $isUpdate = User::find($user->id)->update([
            'image' => $userImage,
            'resume' => $userResume,
            'skills' => $request->get('skills')
        ]);

        if ($isUpdate) {
            return redirect()->back()->with('success', 'File uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
