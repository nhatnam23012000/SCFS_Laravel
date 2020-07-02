<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookController extends Controller
{
    public function index($order){
        $order = \App\order::findOrFail($order);
        return view('adminpage.cookDetail',[
            'order' => $order,
        ]);
    }

    public function update($order){
        $order = \App\order::findOrFail($order);
        $order->done = true;
        $order->save();
        return redirect()->route('home.cook');
    }
}
