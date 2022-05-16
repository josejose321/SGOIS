<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Request;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(LoginRequest $request)
    {

        if( auth()->attempt(array('email'=>$request->email, 'password'=>$request->password)) ){

         if( auth()->user()->type == 'director' ){
             return redirect()->route('admin.index')->withSuccess('Successfully login!');
         }
         elseif( auth()->user()->type == 'user' ){
             return redirect()->route('employee.index')->withSuccess('Successfully login!');
         }
         elseif( auth()->user()->type == 'student' ){
            return redirect()->route('student.index')->withSuccess('Successfully login!');
        }

        }else{
            return redirect()->back()->with('error','Email and password are wrong');
        }
     }
}
