<?php


namespace App\Http\Controllers\Student;

use Auth;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainpanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index(){
        $student =  Auth::guard('student')->user();
        $studentAtributes['name'] = $student->name;
        $studentAtributes['profilePicture'] = $student->profile->profilePictureUrl();
        if($student->progress){
            $studentAtributes['initCourse'] = True;
            $studentAtributes['grades']['grade_1'] = $student->progress->grade_1;
            $studentAtributes['grades']['grade_2'] = $student->progress->grade_2;
            $studentAtributes['grades']['grade_3'] = $student->progress->grade_3;
            $studentAtributes['grades']['grade_final'] = $student->progress->grade_final;
            //dd($studentAtributes['grades']);
        }
        else{
            $studentAtributes['initCourse'] = False;
        }

        //dd($student);

        return view('student.mainpanel', ['studentAtributes' => $studentAtributes]);
    }
}
