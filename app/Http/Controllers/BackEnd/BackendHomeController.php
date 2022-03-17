<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendHomeController extends Controller
{
    public function index(){
        return view("backend.index");
    }
    public function addNewProduct(){
        return view("backend.add-new-product");
    }

    public function viewProductList(){
        return view("backend.view-product-list");
    }
}
