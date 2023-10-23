<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index", [
            "title" => "register",
            "active" => "register"
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $this->validate($request, [
            'name' => 'required|max:225',
            'username' => 'required|min:3|max:225|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Succesufull!, Please Login');
    }
}
