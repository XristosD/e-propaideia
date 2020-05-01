<?php

namespace App\Http\Controllers\Student\Auth;

use Auth;
use App\Student;
use App\Supervisor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:supervisor');
    }

    public function showRegistrationForm()
    {
        return view('student.auth.register');
    }

    public function register(Request $request)
    {
        $data = $this->validator($request);

        Student::create([
            'name' => $data['name'],
            'supervisor_id' => Auth::guard('supervisor')->user()->id,
            'password' => Hash::make($data['password']),
        ]);

        return $this->registrationSucceed($request);
    }

    private function registrationSucceed(Request $request)
    {
        return redirect()
                ->intended(route('supervisor.mainpanel'));
    }

    private function validator(Request $request)
    {
               //validation rules.
               $rules = [
                'name' => 'required|max:255|min:3',
                'password' => 'required|integer|max:9999|min:1111',
                'password-confirmed' => 'required|same:password',
            ];
    
            $messages = [
                'name.required' => 'Το πεδίο όνομα είναι απαραίτητο',
                'name.max' => 'Το όνομα είναι πολύ μεγάλο',
                'name.min' => 'Το όνομα πρέπει να έχει τουλάχιστον 3 χαρακτήρες',
                'password.required' => 'Το πεδίο κωδικός πρόσαβασης είναι απαραίτητο',
                'password.max' => 'Ο κωδικός θα πρέπει να αποτελείτε από 4 ψηφία 0-9',
                'password.min' => 'Ο κωδικός θα πρέπει να αποτελείτε από 4 ψηφία 0-9',
                'password.integer' => 'Ο κωδικός θα πρέπει να αποτελείτε από 4 ψηφία 0-9',
                'password-confirmed.required' => 'Το πεδίο επιβαιβαιώση κωδικού είναι απαραίτητο',
                'password-confirmed.same' => 'Οι κωδικοί δεν ταιριάζουν',
            ];
        
            //validate the request.
            return $request->validate($rules,$messages);
    }
}
