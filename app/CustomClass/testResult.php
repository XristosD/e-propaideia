<?php

namespace App\CustomClass;

use Auth;
use Session;
use App\Result;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testResult
{
    public function showResult(Request $request, $part){

        $test = Session::pull('test');
        $this->countResult($test);
        $this->grade($test);
        $this->saveResult($test);
        $this->updateProgress($test);
        $this->redirectTo($test);
        Session::put('test', $test);
    }

    private function countResult(& $test){
        $questionNum = 0;
        $corectAnswerNum = 0;
        foreach($test['multipleChoice']['exercize'] as $exercize){
            //dd($exercize['correct']);
            $questionNum += 1;
            if($exercize['correct']){
                $corectAnswerNum += 1;
            }
        }
        foreach($test['directAnswer']['exercize'] as $exercize){
            //dd($exercize['correct']);
            $questionNum += 1;
            if($exercize['correct']){
                $corectAnswerNum += 1;
            }
        }

        $test['questionNum'] = $questionNum;
        $test['corectAnswerNum'] = $corectAnswerNum;
        //dd($test);
    }

    private function grade(& $test){
        if($test['questionNum']/2 <= $test['corectAnswerNum']){
            $test['success'] = True;
            $tmp = $test['corectAnswerNum']/$test['questionNum'];
            if($tmp <= 0.7){
                $test['grade'] = 'Γ';
            }
            else if( $tmp > 0.7 && $tmp <= 0.85){
                $test['grade'] = 'Β';
            }
            else{
                $test['grade'] = 'Α';
            }
        }
        //dd($test);
    }

    private function saveResult(& $test){
        $newResult = new Result;
        $newResult->student_id = Auth::guard('student')->user()->id;
        $newResult->part = $test['part'];
        $newResult->question_num = $test['questionNum'];
        $newResult->corect_question_num = $test['corectAnswerNum'];
        $newResult->success = $test['success'];
        $newResult->save();
    }

    private function updateProgress(& $test){
        $nextPart = [
            1 => '2_1',
            2 => '3_1',
            3 => 'final_t',
        ];

        if($test['success']){
            if($test['part'] != 'final'){
                Auth::guard('student')->user()->progress->{'section_'.$nextPart[$test['part']]} = True;
            }
            Auth::guard('student')->user()->progress->{'grade_'.$test['part']} = $test['grade'];
            Auth::guard('student')->user()->progress->save();
        }
    }

    private function redirectTo(& $test){
        $successRedirect = [
            1 => '2/1',
            2 => '3/1',
            3 => 'final/t',
            'final' => 'index',
        ];

        $failRedirect = [
            1 => '1/1',
            2 => '2/1',
            3 => '3/1',
            'final' => 'final/t',
        ];

        if($test['success']){
            $test['redirect'] = $successRedirect[$test['part']];
        }
        else{
            $test['redirect'] = $failRedirect[$test['part']];
        }
    }
}
