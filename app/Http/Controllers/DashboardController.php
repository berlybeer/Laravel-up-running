<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function __construct()
    {

        //Protect all functions
        // $this->middleware('auth');

        //Protect only some functions
        //$this->middleware('auth')
         //    ->only('editUsers');

        //Protect all functions except some
        $this->middleware('auth')
             ->except('editUsers');
    }


    public function index()
    {
        echo "You are in the index";
    }


    public function editUsers(){
        echo "Here you can editUsers";
    }
}
