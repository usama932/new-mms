<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Faqs;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faqs::all();
        return view("admin.faqs.index",compact('faqs'));
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
        Faqs::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'status' => "Active",
            'added_by' => Auth::user()->name,

        ]);
        return redirect()->route('faqs.index')
                        ->with('success','Faqs created successfully.');
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
        Faqs::where('id',$id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'status' => "Active",
            'added_by' => Auth::user()->name,

        ]);
        return redirect()->route('faqs.index')
                        ->with('success','Faqs created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqs= Faqs::find($id);
        $faqs->delete();
        return redirect()->route('faqs.index')->with('success','Faqs Deleted successfully.');
    }
}
