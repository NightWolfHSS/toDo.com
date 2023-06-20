<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
    * home-page | static page
    */
    public function index()
    {
        return view('index');
    }

    /**
    * reg-in | log-in
    * for all users | static page
    */
    public function singin()
    {
        return view('login');
    }

    /**
     * page about us | static page 
     */
    public function about()
    {
        return view('about');
    }

    public function politic()
    {
        return view('sec');
    }

    /*test-page*/
    public function test()
    {
        return view('test');
    }

}
