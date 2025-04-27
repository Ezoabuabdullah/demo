<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
        public function index (){
            $x = [
                ['name' => 'eslam','price'=>1520 ],
                ['name' => 'ezoo','price'=>1800 ],
                ['name' => 'ahmed','price'=>1320 ],
                ['name' => 'ُ ezoo','price'=>1600 ],
            ]
        }
        return $x ;

}
