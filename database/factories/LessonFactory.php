<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LessonFactory extends Factory
{
    public function definition(): array
    {
        $title = ucfirst(fake()->words(mt_rand(2, 6), true));

        return [
            'order' => Lesson::count() + 1,
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->sentences(mt_rand(2, 5), true),
            'course_id' => Course::inRandomOrder()->first(),
            'commit' => '2bdb6d6a823557cf766fcbdc70a480002477792c',
            'video_id' => '835029053',
        ];
    }
}
