<?php

namespace App\CustomClass;

use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultipleChoice
{
    public function showTest(Request $request, $part){
        $content = [
            1 => [1, 2, 3, 4, 5],
            2 => [6, 7],
            3 => [8, 9, 10],
            'final' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        ];
        $test = Session::pull('test');
        $this->randomExercize($content[$part], $test['multipleChoice']['exercize']);
        Session::put('test', $test);
    }

    public function answerTest(Request $request, $part){
        for($i=1;$i<11;$i++){
            $answer[$i] = $request->input('ans'.($i-1));
        }
        $test = Session::pull('test');
        $this->grade($test['multipleChoice'], $answer);
        Session::put('test', $test);
        //dd(Session::get('test'));
    }

    private function grade(& $test, $answer){
        for($i=1;$i<11;$i++){
            if($test['exercize'][$i]['answer'] == $answer[$i]){
                $test['exercize'][$i]['correct'] = True;
            }
            foreach($test['exercize'][$i]['option'] as & $option){
                if($option['value'] == $answer[$i] && $option['value'] != $test['exercize'][$i]['answer']){
                    $option['userAnswer'] = 'wrong';
                }
                if($option['value'] == $test['exercize'][$i]['answer']){
                    $option['userAnswer'] = 'right';
                }
            }
        }
        $test['graded'] = True;
    }

    private function randomExercize($content, & $exercizes){
        $shullledTimesNumArray = [];
        foreach($content as $tableNum){
            $shullledTimesNumArray[$tableNum] = range(1,10);
            shuffle($shullledTimesNumArray[$tableNum]);
        }
        for($i=1;$i<11;$i++){
            $randIndex = array_rand($content);
            $exercizes[$i]['tableNum'] = $content[$randIndex];
            $exercizes[$i]['timesNum'] = array_pop($shullledTimesNumArray[$exercizes[$i]['tableNum']]);
            $exercizes[$i]['answer'] = $exercizes[$i]['tableNum']*$exercizes[$i]['timesNum'];
            $exercizes[$i]['option'][0]['value'] = $exercizes[$i]['answer']; //corect answer
            while(True){
                $bate = rand(1, 10);
                if($bate != $exercizes[$i]['timesNum']){
                    $exercizes[$i]['option'][1]['value']  = $exercizes[$i]['tableNum']*$bate; // wrong answer 
                break;
                }
            }
            while(True){
                $bate = rand(1, 10);
                if($bate != $exercizes[$i]['tableNum']){
                    $exercizes[$i]['option'][2]['value']  = $bate*$exercizes[$i]['timesNum']; // wrong answer 
                break;
                }
            }
            shuffle($exercizes[$i]['option']);
        }
    }

}
