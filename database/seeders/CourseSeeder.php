<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::truncate();

        collect()->range(1, 10)->each(function (int $i) {
            Course::create([
                'title' => 'Course '.$i,
                'description' => 'Course description',
                'lessons_count' => 15,
                'length' => '1h 45min',
            ]);
        });
    }
}
