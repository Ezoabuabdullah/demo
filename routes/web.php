<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ezo', function () {
    $myname = 'ezoo';
    return view('home', compact('myname'));
});

Route::get('/loop',function(){
    $cartypes= ['bmw', 'audi','merseds','toyota'];

    return view('loop', compact('cartypes'));
    });
