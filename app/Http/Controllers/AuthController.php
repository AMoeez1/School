<?php

namespace App\Http\Controllers;

use App\Models\User;  // Import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Show the login form
    public function login_form()
    {
        return view("auth.login");
    }

    // Show the registration form
    public function register_form()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                // 'password' => 'required|string|min:8|confirmed', // "confirmed" checks if password and conf_password match
                'address' => 'required',
                'contact' => 'required',
                'profile_img' => 'required|image', // added image validation for the file
            ]);
    
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'address' => $request->address,
                'contact_number' => $request->contact,
                'profile_img' => $request->file('profile_img')->store('students.profile')
            ]);
    
            if ($user) {
                if (Auth::loginUsingId($user->id)) {
                    return redirect()->route('home');
                } else {
                    return back()->withErrors(['error' => 'Error logging in. Please try again.']);
                }
            } else {
                return back()->withErrors(['error' => 'Error creating user. Please try again.']);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An unexpected error occurred. Please try again later.']);
        }
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
            if (Auth::guard('teacher')->attempt($credentials)) {
                return redirect()->route('home'); 
            } 
            
            else if (Auth::attempt($credentials)) {

                return redirect()->route('home'); 
            } else {
                return back()->withErrors([
                    'email' => 'Invalid user credentials.',
                ]);
            }
        }
    
    
    
    public function logout()
    {
        if(auth()->user()){
            Auth::logout();
        } else {
            Auth::guard('teacher')->logout();
        }
        return redirect()->route('login_form');
    }
}