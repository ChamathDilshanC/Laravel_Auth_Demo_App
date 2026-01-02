<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
            'email' => 'required|email', // email එක required සහ valid email format එකක් විය යුතුයි
            'password' => 'required',
        ]);

        // Find the user by email
        $user = User::where('email', $credentials['email'])->first();

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

    /**
     * Delete the currently authenticated user account
     * ලොග් වෙලා ඉන්න user account එක delete කරනවා (todos ටික foreign key නිසා automatically delete වෙනවා)
     */
    public function destroy()
    {
        // Get currently logged in user ID from session
        $userId = Session::get('user_id');

        if (!$userId) {
            return redirect('/signin')->with('error', 'You must be logged in to delete your account.');
        }

        // Find and delete the user (cascade will delete all related todos)
        $user = User::find($userId);

        if ($user) {
            $user->delete(); // මේ user delete වෙද්දී ඒ user ගේ සියලු todos automatically delete වෙනවා (cascade)
            Session::flush(); // Clear session
            return redirect('/signin')->with('success', 'Account deleted successfully!');
        }

        return redirect('/dashboard')->with('error', 'Failed to delete account.');
    }
}
