<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $avatar = $user->avatar;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $avatar = $file->getClientOriginalName();
            $path = public_path('avatars');
            $file->move($path, $avatar);
        }

        if ($request->name != "") $user->name = $request->name;
        if ($request->phone != "") $user->phone = $request->phone;
        if ($request->birthday != "") $user->birthday = $request->birthday;
        if ($request->gender != "") $user->gender = $request->gender;
        if ($request->job != "") $user->job = $request->job;
        if ($request->education != "") $user->education = $request->education;
        if ($request->place != "") $user->place = $request->place;
        if ($request->note != "") $user->note = $request->note;
        if ($request->avatar != "") $user->avatar = $avatar;
        if ($request->email != "") $user->email = $request->email;
        if ($request->password != "") $user->password = Hash::make($request->password);
        $user->save();

        return redirect("/profile");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
