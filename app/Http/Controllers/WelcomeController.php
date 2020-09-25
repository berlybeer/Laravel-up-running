<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function index()
    {
        return "Welcome from the controller";
    }

    public function helper()
    {
        return view('helper');
    }
}
