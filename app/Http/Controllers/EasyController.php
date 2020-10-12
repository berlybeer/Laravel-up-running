<?php

namespace App\Http\Controllers;

use App\Easy;
use Illuminate\Http\Request;

class EasyController extends Controller
{
    //

    public function index()
    {
        return view('easy.index')->with('easies', Easy::all());
    }
}
