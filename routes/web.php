<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ezo', function () {
    return view ('Ezoo');

});
Route::get('/name/{myname}' , function(){
    return "my name" . request('myname');
});

// عرض قائمة المنتجات
Route::get('/products', [ProductController::class, 'index'])->name('products');

// عرض نموذج إنشاء منتج جديد
Route::get('/create-product', [ProductController::class, 'create'])->name('products.create');

// عرض تفاصيل منتج
Route::get('/show-product', [ProductController::class, 'show'])->name('products.show');
