<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    // Instantiate a new LoginRegisterController Instance.
    public function __construct()
    {
    }

    // Display a registration form.
    public function registration(){
        return view('register');
    }

    // stores a new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => 'required|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/home')->with('message','User created and logged in sucessfully');
    }

    // Display a login form
    public function login(){
        return view('login');
    }

    // Authenticate the user
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/home')->with('You are now logged in');
        }
        else{
            return back()->withErrors(['email' => 'Invalid Credentials']);
        }
    }


    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home')->with('message','You have logged out');
    }    

}


