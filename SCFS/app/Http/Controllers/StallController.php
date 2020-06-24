<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StallController extends Controller
{
    //
    public function index(){
        
        return view('stalls');
    }

    public function StallBaoky(){
        return view('stalls.baoky');
    }

    public function StallHoangdat2(){
        return view('stalls.hoangdat2');
    }

    public function Stallhutieu76(){
        return view('stalls.hutieu76');
    }
}
