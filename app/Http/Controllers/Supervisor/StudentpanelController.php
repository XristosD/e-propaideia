<?php

namespace App\Http\Controllers\Supervisor;

use Auth;
use App\Supervisor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentpanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:supervisor');
    }

    public function index($student_id){

        $supervisor = Auth::guard('supervisor')->user();
        if($supervisor->students->contains($student_id) ){
            $student = $supervisor->students->find($student_id);

            if($student->activated){
                return view('supervisor.studentpanel', [
                    'student' => $student,
                ]);
            }
            else{
                abort(404);
            }


        }
        else{
            abort(404);
        }
    }
}
