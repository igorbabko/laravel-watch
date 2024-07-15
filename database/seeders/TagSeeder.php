<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        Tag::factory(10)->create();

        Course::each(function (Course $course) {
            DB::table('course_tag')->insert([
                'course_id' => $course->id,
                'tag_id' => Tag::inRandomOrder()->first()->id,
            ]);
        });
    }
}
