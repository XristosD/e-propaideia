<?php

namespace App\Http\Controllers\Supervisor\Auth;

use Auth;
use App\Supervisor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:supervisor');
    }

    public function showRegistrationForm(){
        return view('supervisor.auth.register');
    }

    public function register(Request $request){

        $data = $this->validator($request);
        
        Supervisor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return $this->registrationSucceed($request);
        
    }

    private function registrationSucceed(Request $request)
    {

        if(Auth::guard('supervisor')->attempt($request->only('email', 'password'))){
            //Authentication passed...
            return redirect()
                ->intended(route('supervisor.mainpanel'));
        }
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'name' => 'required|max:255|min:3',
            'email'    => 'required|email|unique:supervisors',
            'password' => 'required|max:255|min:6',
            'password-confirmed' => 'required|same:password',
        ];

        $messages = [
            'name.required' => 'Το πεδίο όνομα είναι απαραίτητο',
            'name.max' => 'Το όνομα είναι πολύ μεγάλο',
            'name.min' => 'Το όνομα πρέπει να έχει τουλάχιστον 3 χαρακτήρες',
            'email.required' => 'Το πεδίο E-mail είναι απαραίτητο',
            'email.email' => 'Το e-mail δεν είναι σε αποδεκτή μορφή',
            'email.unique' => 'Το e-mail υπάρχει είδη',
            'password.required' => 'Το πεδίο κωδικός πρόσαβασης είναι απαραίτητο',
            'password.max' => 'Πολύ μεγάλος κωδικός',
            'passwor.min' => 'Ο κωδικός θα πρέπει να αποτελείτε τουλάχιστον από 6 χαρακτήρες',
            'password-confirmed.required' => 'Το πεδίο επιβαιβαιώση κωδικού είναι απαραίτητο',
            'password-confirmed.same' => 'Οι κωδικοί δεν ταιριάζουν',
        ];
    
        //validate the request.
        return $request->validate($rules,$messages);
    }
}
