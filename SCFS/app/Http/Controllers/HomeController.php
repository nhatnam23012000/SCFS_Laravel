<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function cook()
    {
        $orders = \App\order::whereDate('created_at', Carbon::today())->get();
        return view('adminpage.cook')->withOrders($orders);
    }

    public function stallowner()
    {
        return view('adminpage.stallowner');
    }

    public function manager()
    {
        return view('adminpage.manager');
    }

    public function itstaff()
    {
        return view('adminpage.itstaff');
    }

}
