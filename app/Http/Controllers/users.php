<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

class users extends Controller
{
    function userList(Request $req)
    {
        return $req->session()->get('logData');
        $users = User::all(['name', 'email']);
        return view('userList', ['users' => $users]);
    }
    function createUser()
    {
        return view('create');
    }
    function loginSubmit(Request $req)
    {
        User::select('*')->where([
            ['email', '=', $req->email],
            ['password', '=', $req->password]
        ])->get();
        $req->session()->put('logData', [$req->input()]);
        return redirect('/users');
    }
    function createSubmit(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result =  $user->save();
        if ($result) {
            $req->session()->put('logData', [$req->input()]);
            return redirect('/users');
        }
    }
}
