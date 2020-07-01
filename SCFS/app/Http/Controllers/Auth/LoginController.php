<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    protected function authenticated(Request $request, $user)
    {
        if ( $user->role=='CUSTOMER') {// do your magic here
        return redirect()->route('home');
        }

        if($user->role=='COOK'){
            return redirect()->route('home.cook');
        }

        if($user->role=='STALLOWNER'){
            return redirect()->route('home.stallowner');
        }

        if($user->role=='MANAGER'){
            return redirect()->route('home.manager');
        }

        if($user->role=='ITSTAFF'){
            return redirect()->route('home.itstaff');
        }
    }
    /**
     * Where to redirect users after login.
     *
     *@var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
