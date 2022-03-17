<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view("frontend.contact");
    }
    public function about(){
        return view("frontend.about");
    }
}
