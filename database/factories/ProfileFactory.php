<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     protected $model = \App\Models\Profile::class;

    public function definition()
    {
        return [
            'userName' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'roleId' => Arr::random([1,2]),           
        ];
    }
}
