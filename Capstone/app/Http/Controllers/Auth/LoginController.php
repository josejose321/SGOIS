<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:writer')->except('logout');
    }
    public function adminLogin(LoginRequest $request)
    {
        if (Auth::guard('admin')->attempt(['admin_no' => $request->admin_no, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('admin_no', 'remember'));
    }
    public function employeeLogin(LoginRequest $request)
    {

        if (Auth::guard('admin')->attempt(['employee_no' => $request->employee_no, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('employee', 'remember'));
    }
    public function studentLogin(LoginRequest $request)
    {

        if (Auth::guard('admin')->attempt(['student_no' => $request->student_no, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/student');
        }
        return back()->withInput($request->only('student_no', 'remember'));
    }
}
