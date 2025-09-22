<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', function (){
    return view('auth.login');
});

Route::post('/logout', function (){
    Auth::logout();
});

Route::post('/register', function (){
    return view('auth.register');
});
