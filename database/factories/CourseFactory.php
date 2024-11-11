<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(rand(2, 6), true),
            'description' => $this->faker->text(),
            'lessons_count' => $this->faker->numberBetween(10, 50),
            'length' => "{$this->faker->numberBetween(1, 15)}h {$this->faker->numberBetween(1, 59)}min",
        ];
    }
}
