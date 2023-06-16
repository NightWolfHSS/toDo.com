<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
    * home-page
    */
    public function index()
    {
        return view('index');
    }

    /*test-page*/
    public function test()
    {
        return view('test');
    }
}
