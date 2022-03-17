<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view("frontend.shop");
    }
    public function singleProduct(){
        return view("frontend.single-product");
    }
}
