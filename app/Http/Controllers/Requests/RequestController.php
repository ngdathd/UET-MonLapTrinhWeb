<?php

namespace App\Http\Controllers\Requests;

use App\Address;
use App\Level;
use App\RequestIT;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = RequestIT::all();

        return view('requests.request', ['requests' => $requests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();

        $addresses = Address::all();

        $relatives = User::all()->where('address_id', Auth::user()->address_id);

        return view('create-request',
            ['levels' => $levels, 'addresses' => $addresses],
            ['relatives' => $relatives]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = new RequestIT();
        if ($request->name != "") $r->name = $request->name;
        if ($request->level_id != "") $r->level_id = $request->level_id;
        if ($request->deadline != "") $r->deadline = $request->deadline;
        if ($request->create != "") $r->create = $request->create;
        if ($request->address_id != "") $r->address_id = $request->address_id;
        if ($request->relative_id != "") $r->relative_id = $request->relative_id;
        if ($request->content_req != "") $r->content_req = $request->content_req;
        if ($request->comment_id != "") $r->comment_id = $request->comment_id;
        if ($request->status_id != "") $r->status_id = $request->status_id;
        if ($request->file != "") $r->file = $request->file;
        $r->save();

        return redirect('request-it');
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
        $req = RequestIT::findOrFail($id);

        $statuses = Status::all();

        $levels = Level::all();

        $addresses = Address::all();

        $relatives = User::all()->where('address_id', Auth::user()->address_id);

        return view('edit-request',
            ['req' => $req, 'levels' => $levels],
            ['addresses' => $addresses, 'statuses' => $statuses],
            ['relatives' => $relatives, '' => null]);
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
        $r = RequestIT::findOrFail($id);
        if ($request->name != "") $r->name = $request->name;
        if ($request->level_id != "") $r->level_id = $request->level_id;
        if ($request->deadline != "") $r->deadline = $request->deadline;
        if ($request->create != "") $r->create = $request->create;
        if ($request->address_id != "") $r->address_id = $request->address_id;
        if ($request->relative_id != "") $r->relative_id = $request->relative_id;
        if ($request->content_req != "") $r->content_req = $request->content_req;
        if ($request->comment_id != "") $r->comment_id = $request->comment_id;
        if ($request->status_id != "") $r->status_id = $request->status_id;
        if ($request->file != "") $r->file = $request->file;
        $r->save();

        return redirect('request-it/' . $id . '/edit');
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
