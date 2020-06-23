<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class OrderController extends Controller
{
    //
    public function index(){
        $stalls = \App\Stall::all()->toArray();
        return view('order',compact('stalls'));
    }
}
