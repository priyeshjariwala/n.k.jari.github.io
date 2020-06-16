<?php

namespace App\Http\Controllers\customer\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\customer;
use Auth;
use DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

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
    protected function guard()
    {
        return Auth::guard('customer');
    }
    protected function showloginform()
    {

        return view('customer.auth.login');
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = "/c_main";

     

    public function cust_home()
    {
        // dd('innn cust_home');

        return view('customer.cust_home');
    }

    
    protected function credentials(Request $request)
    {
        // dd($request);

        return ['email'=>$request->{$this->username()},'password'=>$request->password];
    }

    public function logout(Request $request)
    {
          $this->guard()->logout();

          $request->session()->invalidate();

          return redirect()->route('c_main');
    }
    public function clogin()
    {
      return view('customer.auth.clogin');
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
