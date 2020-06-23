<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StallController extends Controller
{
    //
    public function index(){
        
        return view('stalls.index');
    }
}
