<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignUp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignInController extends Controller
{
    /**
     * Show the sign in form
     */
    public function create()
    {
        return view('SignIn');
    }

    /**
     * Authenticate the user
     */
    public function authenticate(Request $request)
    {
        // Validate the credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find the user by email
        $user = SignUp::where('email', $credentials['email'])->first();

        // Check if user exists and password matches
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Store user in session
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);
            Session::put('user_email', $user->email);

            return redirect('/dashboard')->with('success', 'Welcome back, ' . $user->name . '!');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Logout the user
     */
    public function logout()
    {
        Session::flush();
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
