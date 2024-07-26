<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();
        // $userDetails = Auth::attempt($user);
        // $data = compact('user');
        // if($userDetails){
        //     return redirect('/home')->withSucess('sucess');
        // }
    }

    // Display a login form
    public function index(){
        return view('login');
    }

    // Authenticate the user
    public function authenticate(Request $request)
    {
    }


    public function logout(Request $request)
    {
        
    }    

}


