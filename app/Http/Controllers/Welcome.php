<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function __construct()
    {

    }

    public function index($name)
    {
        return view('welcome',array('name'=>$name));
    }
}
