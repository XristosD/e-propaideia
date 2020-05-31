<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class progress extends Model
{
    protected $table = 'progress';

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function toArray()
    {
        $tmp =  [
            'part' => [
                '1' => [
                    'section' => [
                        '1'=> $this->section_1_1,
                        '2' => $this->section_1_2,
                        '3' => $this->section_1_3,
                        't' => $this->section_1_t,
                    ],
                ],

                '2' => [
                    'section' => [
                        '1'=> $this->section_2_1,
                        '2' => $this->section_2_2,
                        't' => $this->section_2_t,
                    ],
                ],

                '3' => [
                    'section' => [
                        '1'=> $this->section_3_1,
                        '2' => $this->section_3_2,
                        't' => $this->section_3_t,
                    ],
                ],

                'final' => [
                    'test' => $this->section_final_t,
                ],
            ],
        ];
        return $tmp;
    }

    public function continue()
    {
        if($this->section_final_t)
        {
            return 'final/t';
        }
        if($this->section_3_t)
        {
            return '3/t';
        }
        if($this->section_3_2)
        {
            return '3/2';
        }
        if($this->section_3_1)
        {
            return '3/1';
        }
        if($this->section_2_t)
        {
            return '2/t';
        }
        if($this->section_2_2)
        {
            return '2/2';
        }
        if($this->section_2_1)
        {
            return '2/1';
        }
        if($this->section_1_t)
        {
            return '1/t';
        }
        if($this->section_1_3)
        {
            return '1/3';
        }
        if($this->section_1_2)
        {
            return '1/2';
        }
        if($this->section_1_1)
        {
            return '1/1';
        }        
    }

    public function progressPercentage()
    {
        $total = $this->section_1_1 +
                    $this->section_1_2 +
                    $this->section_1_3 +
                    $this->section_1_t +
                    $this->section_2_1 +
                    $this->section_2_2 +
                    $this->section_2_t +
                    $this->section_3_1 +
                    $this->section_3_2 +
                    $this->section_3_t +
                    $this->section_final_t ;
        return round(($total/11) * 100);
    }
}
