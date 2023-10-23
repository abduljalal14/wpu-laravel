<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index(){
        return view("register.index", [
            "title"=> "register",
            "active"=> "register"
        ]);
    }

    public function store(Request $request){
        dd('regis gagal');
    //    $request->validate([
    //     'name'=> 'required|max:225',
    //     'username' => 'required|min:3|max:225|unique:users',
    //     'email' =>'required|email|unique:users',
    //     'password'=> 'required|min:5|max:255'
    //    ]);

       dd("Registrasi Berhasil");
}
}