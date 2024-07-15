<x-layouts.guest>
    <x-section>
        <x-container class="flex flex-col gap-4 pb-10 pt-20 md:py-20">
            <x-heading>Course Title</x-heading>
            <div class="flex flex-col items-start gap-6 md:flex-row">
                <div class="flex flex-col gap-2 md:w-1/2">
                    <x-course-info />
                </div>
                <div class="flex w-full flex-col gap-4 md:w-1/2">
                    <div class="text-xl font-bold md:text-2xl">
                        <span>25 lessons</span>
                        &middot;
                        <span>2h 25m</span>
                    </div>
                    <x-lessons :lessons="$course->lessons" />
                </div>
            </div>
        </x-container>
    </x-section>
</x-layouts.guest>
