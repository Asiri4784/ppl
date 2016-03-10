<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Validator;
use Auth;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\LoginRequest; 


class AuthController extends Controller
{
    protected $redirectTo = '/admin';
    protected $admin; 
    protected $auth;

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth, Admin $admin)
    {
        $this->admin = $admin; 
        $this->auth = $auth;
    }

    public function getLogin()
    {
        if(!Auth::check())
        {
             return view('adminlogin');
        }
        return redirect('/admin');
       
    }

    public function getProfile()
    {
        dd(Auth::check());
        return view('adminpage');
    }

    public function postLogin(LoginRequest $request) 
    {
         $this->validate($request, [
                'username' => 'required', 'username' => 'required',
            ]);
    
            $credentials = $request->only('username', 'password');  
            if ($this->auth->attempt($credentials, $request->has('remember_token')))
            {
                return redirect()->intended($this->redirectPath());
            }
            return redirect('/login')->withErrors([
            'username' => 'The email or the password is invalid. Please try again.',
             ]);
    }

    public function getLogout()
    {
        $this->auth->logout();
        return redirect('/login');
    }
}
