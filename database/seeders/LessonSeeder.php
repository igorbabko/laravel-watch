<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        Lesson::truncate();

        Course::each(fn (Course $course) => collect()
            ->range(1, mt_rand(5, 20))
            ->each(fn ($number) => Lesson::factory()
                ->for($course)
                ->create(['number' => $number])
            )
        );
    }
}
