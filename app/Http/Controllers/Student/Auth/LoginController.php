<?php

namespace App\Http\Controllers\Student\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
    }

    public function login(Request $request)
    {   
        dd($request);
        $this->validator($request);
        //dd($request);
        
        if(Auth::guard('student')->attempt($request->only('name','password'))){
            //Authentication passed...
            if(Auth::guard('student')->user()->activated){
                return redirect()->route('student.mainpanel');
            }
            else{
                return redirect()->route('student.profile');
            }
            
        }

        //Authentication failed...
        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('/');
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
            'name'    => 'required|exists:students',
            'password' => 'required|string|max:255',
        ];
           
        //validate the request.
        $request->validate($rules);
    }
}
