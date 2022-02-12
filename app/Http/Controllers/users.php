<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

class users extends Controller
{
    function userList()
    {
        $users = User::all(['name', 'email']);
        return view('userList', ['users' => $users]);
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
    function createSubmit(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result =  $user->save();
        if ($result) {
            return redirect('/users');
        }
    }
}
