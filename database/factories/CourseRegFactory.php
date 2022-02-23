<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CourseRegFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // protected function myRand($min,$max)
    // {
    //     return mt_rand($min,$max);
    // }

    public function definition()
    {
        return [            
            'courseId' => mt_rand(1,17),           
            'profileId' => mt_rand(1,30),           
        ];
    }
}
