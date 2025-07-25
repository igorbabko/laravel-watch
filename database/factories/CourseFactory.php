<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => ucfirst(fake()->words(rand(2, 6), true)),
            'description' => fake()->paragraph(2),
            'repository_url' => 'https://github.com/igorbabko/phpstorm-productivity',
        ];
    }
}
