<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        Course::each(function (Course $course) {
            collect(range(1, mt_rand(3, 10)))->each(function () use ($course) {
                Lesson::factory()->for($course)->create();
            });
        });
    }
}
