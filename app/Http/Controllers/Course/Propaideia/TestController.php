<?php

namespace App\Http\Controllers\Course\Propaideia;

use Auth;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CustomClass\MultipleChoice;
use App\CustomClass\DirectAnswer;
use App\CustomClass\testResult;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function showTest(Request $request, $part){
        $student = Auth::guard('student')->user();
        $studentAtributes['profilePicture'] = $student->profile->profilePictureUrl();
        //Session::forget('test');
        if(!$student->progress->{'section_'.$part.'_t'}){
            return redirect('/propaideia/index');
        }
        if(Session::has('test')){
            $test = Session::get('test');
            if($test['part'] == $part){
                if($test['multipleChoice']['graded'] && $test['directAnswer']['graded']){
                    $testResult = new testResult();
                    $testResult->showResult($request, $part);
                    return view('course/propaideia/exercize/testResult', ['test' => Session::pull('test'), 'studentAtributes' => $studentAtributes,]);
                }
                if($test['multipleChoice']['graded'] && !$test['directAnswer']['graded']){
                    $directAnswer = new DirectAnswer();
                    $directAnswer->showTest($request, $part);
                    return view('course/propaideia/exercize/directAnswer', ['studentAtributes' => $studentAtributes,]);
                }
                if(!$test['multipleChoice']['graded'] && !$test['directAnswer']['graded']){
                    return view('course/propaideia/exercize/multChoice', ['studentAtributes' => $studentAtributes,]);
                }
            }
            else{
                Session::forget('test');
                $this->createSession($part);
                $multipleChoice = new MultipleChoice();
                $multipleChoice->showTest($request, $part);
                return view('course/propaideia/exercize/multChoice', ['studentAtributes' => $studentAtributes,]);
            }
        }
        else{
            $this->createSession($part);
            $multipleChoice = new MultipleChoice();
            $multipleChoice->showTest($request, $part);
            return view('course/propaideia/exercize/multChoice', ['studentAtributes' => $studentAtributes,]);
        }
    }

    public function answerTest(Request $request, $part){
        $student = Auth::guard('student')->user();
        $studentAtributes['profilePicture'] = $student->profile->profilePictureUrl();
        if(!$student->progress->{'section_'.$part.'_t'}){
            return redirect('/propaideia/index');
        }
        if(Session::has('test')){
            $test = Session::get('test');
            if($test['part'] == $part){
                if(!$test['multipleChoice']['graded'] && !$test['directAnswer']['graded']){
                    $multipleChoice = new MultipleChoice();
                    $multipleChoice->answerTest($request, $part);
                    return view('course/propaideia/exercize/multChoice', ['part' => $part, 'section' => 'multipleChoice', 'studentAtributes' => $studentAtributes,]);
                }
                if($test['multipleChoice']['graded'] && !$test['directAnswer']['graded']){
                    $directAnswer = new DirectAnswer();
                    $directAnswer->answerTest($request, $part);
                    return view('course/propaideia/exercize/directAnswer', ['part' => $part, 'section' => 'test', 'studentAtributes' => $studentAtributes,]);
                }
            }
            else{
                return redirect('/propaideia/index');
            }
        }
        else{
            return redirect('/propaideia/index');
        }
    }

    private function createSession($part){
        $test = $this->testStracture();
        $test['part'] = $part;
        Session::put('test', $test);
    }

    private function testStracture(){
        $testStracture = [
            'part' => null,
            'questionNum' => null,
            'corectAnswerNum' => null,
            'success' => False,
            'grade' => null,
            'multipleChoice' => [
                'graded' => False,
                'exercize' => [],
            ],
            'directAnswer' => [
                'graded' => False,
                'exercize' => [],
            ],
        ];
        for($i=1;$i<11;$i++){
            $testStracture['multipleChoice']['exercize'][$i] = [
                'correct' => False,
                'tableNum' => null,
                'timesNum' => null,
                'answer' => null,
                'option' => [
                    [
                        'value' => null,
                        'userAnswer' => null,
                    ],
                    [
                        'value' => null,
                        'userAnswer' => null,
                    ],
                    [
                        'value' => null,
                        'userAnswer' => null,
                    ],
                ],
            ];
        }
        for($i=1;$i<11;$i++){
            $testStracture['directAnswer']['exercize'][$i] = [
                'correct' => False,
                'tableNum' => null,
                'timesNum' => null,
                'answer' => null,
                'userAnswer' => null,
            ];
        }

        return $testStracture;
    }
}
