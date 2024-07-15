<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        $title = ucfirst(fake()->words(mt_rand(2, 6), true));

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->sentences(mt_rand(2, 5), true),
            'repository' => fake()->unique()->word(),
        ];
    }
}
