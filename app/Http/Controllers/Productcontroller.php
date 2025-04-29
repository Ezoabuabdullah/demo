<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product; // تأكد من استخدام اسم النموذج الصحيح

class Productcontroller extends Controller
{
        public function index (){
            $products = product::all();
            return view('products.index', compact('products'));
        }
}

