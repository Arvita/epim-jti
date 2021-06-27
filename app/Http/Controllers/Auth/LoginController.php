<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
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

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $remember = $request->has('remember_me') ? true : false;
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'admin'], $remember)) {
            $request->session()->regenerate();
            $data = User::where('email', $email)->first();
            $request->session()->put('users', $data);
            $request->session()->put('time_logged', date('Y-m-d H:i:s'));
            return redirect()->route('admin.dashboard');
        } elseif (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 'user'], $remember)) {
            $request->session()->regenerate();
            $data = User::where('email', $email)->first();
            $request->session()->put('users', $data);
            $request->session()->put('time_logged', date('Y-m-d H:i:s'));
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
