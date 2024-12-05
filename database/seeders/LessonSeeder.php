<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    private array $data = [
        [
            'number' => 1,
            'title' => 'Global search',
        ],
        [
            'number' => 2,
            'title' => 'Navigation',
        ],
        [
            'number' => 3,
            'title' => 'File navigation',
        ],
        [
            'number' => 4,
            'title' => 'Navigation between classes, interfaces, methods',
        ],
        [
            'number' => 5,
            'title' => 'Code formatting and import optimization',
        ],
        [
            'number' => 6,
            'title' => 'Searching and replacing',
        ],
        [
            'number' => 7,
            'title' => 'Code completion',
        ],
        [
            'number' => 8,
            'title' => 'Hints in the source code',
        ],
        [
            'number' => 9,
            'title' => 'Code generation',
        ],
        [
            'number' => 10,
            'title' => 'Refactoring',
        ],
        [
            'number' => 11,
            'title' => 'Editing',
        ],
        [
            'number' => 12,
            'title' => 'Multiple cursors',
        ],
        [
            'number' => 13,
            'title' => 'Additional keyboard shortcuts',
        ],
        [
            'number' => 14,
            'title' => 'Live templates',
        ],
        [
            'number' => 15,
            'title' => 'File templates',
        ],
        [
            'number' => 16,
            'title' => 'Quick lists',
        ],
    ];

    public function run(): void
    {
        Lesson::truncate();

        $courseTitle = 'JetBrains IDE | Productivity';

        Lesson::factory(count($this->data))
            ->for(Course::where('title', $courseTitle)->first())
            ->sequence(...$this->data)
            ->create();

        Course::whereNot('title', $courseTitle)
            ->each(fn (Course $course) => collect()
                ->range(1, mt_rand(5, 20))
                ->each(fn ($number) => Lesson::factory()
                    ->for($course)
                    ->create(['number' => $number])
                )
            );
    }
}
