<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\users;

Route::get('/', function () {
    return view('login');
});


Route::get('users', [users::class, 'userList']);
Route::get('create', [users::class, 'createUser']);
Route::post('loginSubmit', [users::class, 'loginSubmit']);
Route::post('createSubmit', [users::class, 'createSubmit']);
