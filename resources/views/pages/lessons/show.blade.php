<x-layout>
    <section class="pt-32 px-10">
        <div class="flex flex-col gap-8 container pb-24">
            <h1 class="text-center font-extrabold text-5xl">{{ $lesson->title }}</h1>
            <div class="flex flex-col gap-2">
                <x-lesson.player :$lesson/>
                <div class="flex gap-2">
                    <a href="#" class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        <x-icon name="chevron-left" class="size-6"/>
                    </a>
                    <a href="#" class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200 mr-auto">
                        <x-icon name="chevron-right" class="size-6"/>
                    </a>
                    <a href="{{ route('courses.show', $lesson->course) }}"
                       class="font-semibold rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        All Lessons
                    </a>
                    <a href="https://github.com/igorbabko"
                       target="_blank"
                       class="font-semibold rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Source Code
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
