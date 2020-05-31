<?php

namespace App\Http\Controllers\Course\Propaideia;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function showLecture($part, $section)
    {
        $student = Auth::guard('student')->user();
        if(!$student->progress->{'section_'.$part.'_'.$section}){
            return redirect('/propaideia/index');
        }
        $studentAtributes['profilePicture'] = $student->profile->profilePictureUrl();
        $this->unblockNextLecture($part, $section);
        return view('course.propaideia.lecture.'.$part.'.'.$section, [
            'part' => $part, 
            'section' => $section,
            'studentAtributes' => $studentAtributes,
            ]);
    }

    private function unblockNextLecture($part, $section)
    {
        $next = [
            1 => [
                1 => ['nextPart' => 1, 'nextSection' => 2],
                2 => ['nextPart' => 1, 'nextSection' => 3],
                3 => ['nextPart' =>1, 'nextSection' => 't']
            ],
            2 => [
                1 => ['nextPart' => 2, 'nextSection' => 2],
                2 => ['nextPart' => 2, 'nextSection' => 't'],
            ],
            3 => [
                1 => ['nextPart' => 3, 'nextSection' => 2],
                2 => ['nextPart' => 3, 'nextSection' => 't'],
            ]
        ];
        Auth::guard('student')->user()->progress->{'section_'.$next[$part][$section]['nextPart'].'_'.$next[$part][$section]['nextSection']} = True;
        Auth::guard('student')->user()->progress->save();
    }
}
