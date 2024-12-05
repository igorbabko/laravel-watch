<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_id' => Course::inRandomOrder()->first(),
            'number' => 1,
            'title' => ucfirst(fake()->words(mt_rand(2, 6), true)),
            'url' => 'https://www.youtube.com/embed/WAabfswLih8?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/18c05d356b229134f07308532626f17a294a9d7c',
        ];
    }
}
