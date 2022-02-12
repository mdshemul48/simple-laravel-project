<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

class users extends Controller
{
    function userList()
    {
        return view('userList');
    }
    function createUser()
    {
        return view('create');
    }
    function loginSubmit(Request $req)
    {
        return User::select('*')->where([
            ['email', '=', $req->email],
            ['password', '=', $req->password]
        ])->get();
    }
}
