<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    //
    public function index(){
        return view('manage');
    }
}
