<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request_meeting;

class Request_meetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Request_meeting::latest()->get();
        return view('admin.request_meeting',compact('meetings'));
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
        Request_meeting::create([
            'client_name' => $request->client_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'requested_Date' => $request->requested_Date,
            'requested_time' => $request->requested_time,
            'company_name' => $request->company_name,
            'website' => $request->website,
            'employees' => $request->employees,
            'notes' => $request->notes,

        ]);
        return redirect()->route('consultant')
                        ->with('success','Book meeting successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meeting = Request_meeting::find($id);
        return view('admin.showrequest_meeting',compact('meeting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $meetings = Request_meeting::find($id);
        $meetings->delete();
        return redirect()->back()
                        ->with('success','Delete meeting successfully.');

    }
}
