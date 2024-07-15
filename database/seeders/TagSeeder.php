<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        Tag::factory(7)
            ->state(new Sequence(
                ['name' => 'Laravel'],
                ['name' => 'Symfony'],
                ['name' => 'Vue'],
                ['name' => 'React'],
                ['name' => 'Angular'],
                ['name' => 'Nuxt'],
                ['name' => 'Tailwind']
            ))
            ->create();

        Course::each(function (Course $course) {
            Tag::take(mt_rand(1, 3))->inRandomOrder()->get()->each(function (Tag $tag) use ($course) {
                $course->tags()->attach($tag);
            });
        });
    }
}
