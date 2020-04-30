<?php

namespace App\Http\Controllers\Supervisor\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:supervisor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('supervisor.auth.login');
    }

    public function login(Request $request)
    {   
        $this->validator($request);
        
        if(Auth::guard('supervisor')->attempt($request->only('email','password'))){
            //Authentication passed...
            return redirect()
                ->intended(route('supervisor.mainpanel'));
        }

        //Authentication failed...
        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('supervisor')->logout();
        return redirect()
            ->route('supervisor.welcome');
    }

    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->witherrors(['error','Login failed, please try again!']);
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:supervisors',
            'password' => 'required|string|max:255',
        ];
           
        //validate the request.
        $request->validate($rules);
    }
}
