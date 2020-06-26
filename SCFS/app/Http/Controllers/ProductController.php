<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function presentPrice($id){
        $product = \App\Product::find($id);
        return $product->cost;
    }
}
