<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function homePage()
    {

        return view("homePage");
    }
}
