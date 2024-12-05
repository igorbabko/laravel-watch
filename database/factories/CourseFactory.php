<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        $hours = $this->faker->numberBetween(1, 15);
        $minutes = $this->faker->numberBetween(1, 59);

        return [
            'title' => ucfirst(fake()->words(rand(2, 6), true)),
            'description' => fake()->paragraph(2),
            'length' => "{$hours}h {$minutes}min",
            'repository_url' => 'https://github.com/igorbabko/phpstorm-productivity',
        ];
    }
}
