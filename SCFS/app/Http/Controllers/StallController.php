<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stall;
class StallController extends Controller
{
    //
    public function index($stall){
        $stall = Stall::findOrFail($stall);
        $product = $stall->products->toArray();
        return view('stalls',[
            'stall' => $stall,
        ]);
    }
}
