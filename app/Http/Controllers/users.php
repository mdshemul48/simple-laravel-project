<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
