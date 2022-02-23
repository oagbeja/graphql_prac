<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function getCourseCode()
    {
        $letter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $number ='0123456789';
        $arrN =[]; $arrL=[];
        for($i=0; $i<3; $i++){
            $arrL[] = $letter[mt_rand(0,strlen($letter)-1)];
            $arrN[] = $number[mt_rand(0,strlen($number)-1)];
        }
        return implode('',$arrL).implode('',$arrN);
    }

    public function definition()
    {
        return [            
            'courseDesc' => $this->getCourseCode(),           
        ];
    }
}
