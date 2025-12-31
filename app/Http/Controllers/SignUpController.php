<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:sign_ups,email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Hash the password
        $validated['password'] = bcrypt($validated['password']);

        // Create the user in sign_ups table
        SignUp::create($validated);

        // Create the user in users table as well
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        // Redirect with success message
        return redirect('/signin')->with('success', 'Account created successfully! You can now sign in.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SignUp $signUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SignUp $signUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SignUp $signUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SignUp $signUp)
    {
        //
    }
}
