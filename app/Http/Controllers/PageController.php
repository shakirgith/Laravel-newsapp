<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return view('welcome');
    }
    public function showCategory(){
        return view('category');
    }

    public function showContactus(){
        return view('contactus');
    }

    public function showUsers(){
        return view('user_info');
    }
}
