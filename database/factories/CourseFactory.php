<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => ucfirst(fake()->words(mt_rand(2, 6), true)),
            'description' => fake()->sentences(mt_rand(2, 5), true),
            'repository' => 'ontrack',
        ];
    }
}
