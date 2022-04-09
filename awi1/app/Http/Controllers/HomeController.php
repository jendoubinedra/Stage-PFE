<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $currentpage="home";
        return view('home',compact("currentpage"));
    }

}
