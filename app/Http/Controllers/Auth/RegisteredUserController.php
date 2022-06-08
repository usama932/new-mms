<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $image = null;
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->has('profile_image')) {

            $image = $request->file('profile_image');
            $destinationPath = 'image/';
            $profileImage =  $image->getClientOriginalName();
           $image =  $image->move($destinationPath, $profileImage);

        }

        $user = User::create([
            'name' => '',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'state' => $request->state,
            'city' => $request->city,
            'street_address' => $request->street_address,
            'contact' =>  $request->contact,
            'grade' => $request->grade,
            'is_active' => $request->is_active,
            'roled_as' => $request->role_id,
            'profile_image' => $image
        ]);

        event(new Registered($user));
        $user->attachRole($request->role_id);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
