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
            'url' => 'https://www.youtube.com/embed/WAabfswLih8?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/18c05d356b229134f07308532626f17a294a9d7c',
        ],
        [
            'number' => 2,
            'title' => 'Navigation',
            'url' => 'https://www.youtube.com/embed/nG9Mi9WtkyM?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/28b23107861a7270350fbcde08f78c657bc86d43',
        ],
        [
            'number' => 3,
            'title' => 'File navigation',
            'url' => 'https://www.youtube.com/embed/Y0OGWfHBnuY?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/7997d691e8a43736cc42dd4842357182a44d43ea',
        ],
        [
            'number' => 4,
            'title' => 'Navigation between classes, interfaces, methods',
            'url' => 'https://www.youtube.com/embed/OpRV0nhjIp0?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/eb22db856e5f4b8ce5cbec4934400fcb8cd38d20',
        ],
        [
            'number' => 5,
            'title' => 'Code formatting and import optimization',
            'url' => 'https://www.youtube.com/embed/KXZ0yVaXQTI?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/bad3e9ebd4e0f49b4e7315d7a5d3a2ccf7ab745b',
        ],
        [
            'number' => 6,
            'title' => 'Searching and replacing',
            'url' => 'https://www.youtube.com/embed/jX4fJ16Xicw?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/6ecd98e9e083c7cad173084239bbf0c7920acd61',
        ],
        [
            'number' => 7,
            'title' => 'Code completion',
            'url' => 'https://www.youtube.com/embed/wHZkdgHloHE?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/4142a1a72a82449a3bbeaa20b8558f7d6dd0dc76',
        ],
        [
            'number' => 8,
            'title' => 'Hints in the source code',
            'url' => 'https://www.youtube.com/embed/NeXz_c9oCNU?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/887b0a3e0ec665052e5a78722ff218773c0bc880',
        ],
        [
            'number' => 9,
            'title' => 'Code generation',
            'url' => 'https://www.youtube.com/embed/-842e0Qd-c8?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/94f72f9f6cba9c0835441d994ec3c29271e786c3',
        ],
        [
            'number' => 10,
            'title' => 'Refactoring',
            'url' => 'https://www.youtube.com/embed/15L9rnm2Blg?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/9579ffe992be5bf6e9c98f94636363e62eb06315',
        ],
        [
            'number' => 11,
            'title' => 'Editing',
            'url' => 'https://www.youtube.com/embed/PIpsSHIMGCU?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/ed24f7e369c355b004d00ea4ecfd285ec48ba774',
        ],
        [
            'number' => 12,
            'title' => 'Multiple cursors',
            'url' => 'https://www.youtube.com/embed/Zl4_JPcbuic?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/e4563210daaab2fd68a8a7dcbbc96037f9bdb1dc',
        ],
        [
            'number' => 13,
            'title' => 'Additional keyboard shortcuts',
            'url' => 'https://www.youtube.com/embed/5LbmShtNUqU?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/2d4a2f8205b1d1eb8210e65a41c1e81a62afb0d1',
        ],
        [
            'number' => 14,
            'title' => 'Live templates',
            'url' => 'https://www.youtube.com/embed/lxx-KWnxFAM?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/13dcf6440c775d55d3e92b3131c9e2a93b529ed8',
        ],
        [
            'number' => 15,
            'title' => 'File templates',
            'url' => 'https://www.youtube.com/embed/a2R4dhCWemc?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/2329ce2bdea77cffe6b45c0748c25d6c3c5d5b73',
        ],
        [
            'number' => 16,
            'title' => 'Quick lists',
            'url' => 'https://www.youtube.com/embed/1smepr7v1lk?list=PLXDouhCU5r6rHYz4UgF-akO3lYCkL3ihn',
            'commit_url' => 'https://github.com/igorbabko/phpstorm-productivity/commit/6f5b89844ec80ca8cedd1369a945791016adaccf',
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
