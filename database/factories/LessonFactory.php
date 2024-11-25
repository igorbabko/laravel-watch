<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    public function definition(): array
    {
        return [
            'number' => 1,
            'title' => ucfirst(fake()->words(mt_rand(2, 6), true)),
        ];
    }
}
