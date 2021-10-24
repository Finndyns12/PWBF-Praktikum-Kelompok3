<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
         $request->validate([
             'name' => 'required|max:255',
             'email' => 'required|email|unique:users',
             'Tanggal Lahir' => 'required',
             'password' => 'required|min:5|max:255',
             'id kecamatan' => 'required|min:1|max255'
         ]);

         dd('Registrasi Berhasil!');
    }

}
