<x-layout>
    <section class="pt-32">
        <div class="container flex flex-col gap-8 pb-24">
            <h1 class="text-center font-extrabold text-5xl">{{ $lesson->title }}</h1>
            <div class="flex flex-col gap-2">
                <x-lesson.player :$lesson/>
                <div class="flex gap-2 flex-row">
                    <div class="flex gap-2 mr-auto">
                        <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200 flex-grow"
                           href="#">
                            <x-icon name="chevron-left" class="size-6"/>
                        </a>
                        <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200 flex-grow"
                           href="#">
                            <x-icon name="chevron-right" class="size-6"/>
                        </a>
                    </div>
                    <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200"
                       href="{{ route('courses.show', $lesson->course) }}">
                        All lessons
                    </a>
                    <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200"
                       href="https://github.com/igorbabko">
                        Source Code
                    </a>
                    <button
                        class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Mark as complete
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-layout>
