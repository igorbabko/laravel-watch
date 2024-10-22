@php
    $courses = [
        [
            'title' => 'Course 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque ea fuga numquam, porro quam quas reprehenderit sint temporibus.',
            'lessons_count' => 21,
            'length' => '2h 30min',
        ],
        [
            'title' => 'Course 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque ea fuga numquam, porro quam quas reprehenderit sint temporibus.',
            'lessons_count' => 16,
            'length' => '1h 40min',
        ],
        [
            'title' => 'Course 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque ea fuga numquam, porro quam quas reprehenderit sint temporibus.',
            'lessons_count' => 8,
            'length' => '45min',
        ],
        [
            'title' => 'Course 4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque ea fuga numquam, porro quam quas reprehenderit sint temporibus.',
            'lessons_count' => 14,
            'length' => '1h 20min',
        ],
    ];
@endphp

<section class="w-full">
    <div class="container flex flex-col gap-8 pb-24 px-4">
        <h2 class="text-center font-bold text-4xl">Latest Courses</h2>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($courses as $course)
                <x-course :$course/>
            @endforeach
        </div>
    </div>
</section>
