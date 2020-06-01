<?php

namespace App\Http\Controllers\Course\Propaideia;

use Auth;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index(){
        $student = Auth::guard('student')->user();
        $studentAtributes['profilePicture'] = $student->profile->profilePictureUrl();
        $student->initProgress();
        $student = Student::find($student->id);
        //dd($student->profile);
        $courseAtributes['progress'] = $student->progress->toArray();
        $courseAtributes['continue'] = $student->progress->continue();
        //dd($courseAtributes);


        return view('course.propaideia.index', [
            'studentAtributes' => $studentAtributes,
            'courseAtributes' => $courseAtributes,
        ]);
    }
}
