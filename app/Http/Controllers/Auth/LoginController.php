<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    // protected function redirectTo() {

    //     if (Auth::user()->role_type == "admin") {
    //        return redirect('/admin');
    //     }
    //     else if(Auth::user()->role_type == "user") {
    //         return redirect(session()->get('url.intended'));
    //     }
    // }

      protected function authenticated(Request $request)
    {
            if(Auth::user() != null) {
                if (Auth::user()->role_type == 'admin') {
                    return redirect('/admin');
                } else {
                    return redirect(session()->get('url.intended'));
                }
            }
    }

    public function showLoginForm() {
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        return view('auth.login');
}

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
