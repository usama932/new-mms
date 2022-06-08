<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $q = Auth::user()->id;
        $data = User::where('id',$q)->first();
        return view('customer.profiles.profile',compact('data'));
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

        $id = auth()->user()->id;

        if ($request->has('profile_image')) {
            $image = $request->file('profile_image');
            $destinationPath = 'image/';
            $profileImage = $image->getClientOriginalName();
           $image =  $image->move($destinationPath, $profileImage);

           User::where('id',$id)->update([
            'profile_image' => $image

        ]);
        }
        $user = User::where('id',$id)->update([
            'name' => '',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'city' => $request->city,
            'state' => $request->state,
            'street_address' => $request->street_address,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);
        return redirect()->route('customer_profiles.index')->with('message','Profile update Successfully.');
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
