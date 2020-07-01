<?php
namespace App\Http\Controllers;

use App\User;
use App\order;
use Illuminate\Http\Request;


class ManageController extends Controller
{
    //
    public function index($user){
        $user = \App\User::findOrFail($user);
        return view('manage', [
            'user' => $user
        ]);
    }

    public function detail($order){
        $order = \App\order::findOrFail($order);
        return view('detail',[
            'order' => $order
        ]);
    }

}


