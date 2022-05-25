<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function sayHi()
    {
        return view('firstController');
    }
    public function today(){
        $today = date("l d/m/Y");
        return view('date', ['today'=>$today]);
    }
}
