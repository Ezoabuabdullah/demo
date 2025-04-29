<?php

namespace App\Http\Controllers;
use App\Models\Product;
abstract class Controller
{
    public function index()
    {
        $products = Product::all(); // جلب كل المنتجات من قاعدة البيانات

        return view('products.index', compact('products')); // إرسالها للعرض
    }
}
