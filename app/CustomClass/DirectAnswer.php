<?php

namespace App\CustomClass;

use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectAnswer
{
    public function showTest(Request $request, $part){
        $content = [
            1 => [1, 2, 3, 4, 5],
            2 => [6, 7],
            3 => [8, 9, 10],
            'final' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        ];

        $test = Session::pull('test');
        $this->randomExercize($content[$part], $test['directAnswer']['exercize']);
        Session::put('test', $test);
        
        //return view('course/propaideia/exercize/directAnswer', ['part' => $part, 'section' => 'test']);
    }


    public function answerTest(Request $request, $part){

        for($i=1;$i<11;$i++){
            $answer[$i] = $request->input('ans'.($i-1));
        }
        $test = Session::pull('test');
        $this->grade($test['directAnswer'], $answer);
        Session::put('test', $test);

        //return view('course/propaideia/exercize/directAnswer', ['part' => $part, 'section' => 'test']);
    }

    private function randomExercize($content, & $exercizes){
        foreach($content as $tableNum){
            $shullledTimesNumArray[$tableNum] = range(1,10);
            shuffle($shullledTimesNumArray[$tableNum]);
        }
        for($i=1;$i<11;$i++){
            $randIndex = array_rand($content);
            $exercizes[$i]['tableNum'] = $content[$randIndex];
            $exercizes[$i]['timesNum'] = array_pop($shullledTimesNumArray[$exercizes[$i]['tableNum']]);
            $exercizes[$i]['answer'] = $exercizes[$i]['tableNum']*$exercizes[$i]['timesNum'];
        }
    }


    private function grade(& $test, $answer){
        for($i=1;$i<11;$i++){
            if($test['exercize'][$i]['answer'] == $answer[$i]){
                $test['exercize'][$i]['correct'] = True;
            }
            $test['exercize'][$i]['userAnswer'] =  $answer[$i];
        }
        $test['graded'] = True;
    }
}
