<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('logins', [
            "title" => "Login",
            "logins" => Login::all()
        ]);
    }

    public function show($slug)
    {
        return view('logins',[
            "title" => "Login",
            "logins" => Login::find($slug)
        ]);
    }
}
