<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ezo', function () {
    $myname = 'ezoo';
    return view('home', compact('myname'));
});

