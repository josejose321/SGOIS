<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectedTo()
    {
        if(Auth()->user()->type === 'admin')
        {
            return route('admin.index');
        }
        elseif(Auth()->user()->type === 'endorser')
        {
            return route('employee.index');
        }
        elseif(Auth()->user()->type === 'student')
        {
            return route('student.index');
        }
    }
    public function login(PasswordRequest $request)
    {


        if( auth()->attempt(array('email'=>$request['email'], 'password'=>$request['password'])) ){

         if( auth()->user()->type == 'admin' ){
             return redirect()->route('admin.dashboard')->withSuccess('Successfully login!');
         }
         elseif( auth()->user()->type == 'endorser' ){
             return redirect()->route('employee.dashboard')->withSuccess('Successfully login!');
         }
         elseif( auth()->user()->type == 'student' ){
            return redirect()->route('student.dashboard')->withSuccess('Successfully login!');
        }

        }else{
            return redirect()->back()->with('error','Please Check your Credentials');
        }
     }
}
