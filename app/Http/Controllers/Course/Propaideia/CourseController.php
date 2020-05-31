<?php

namespace App\Http\Controllers\Course\Propaideia;

use Auth;
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
        $courseAtributes['progress'] = $student->progress->toArray();
        $courseAtributes['continue'] = $student->progress->continue();
        //dd($courseAtributes);


        return view('course.propaideia.index', [
            'studentAtributes' => $studentAtributes,
            'courseAtributes' => $courseAtributes,
        ]);
    }
}
