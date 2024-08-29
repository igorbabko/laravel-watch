<x-layouts.guest>
    <x-section>
        <x-container class="flex flex-col gap-4 pb-10 pt-20 md:py-20">
            <x-page-heading>{{ $course->title }}</x-page-heading>
            <div class="flex flex-col gap-6 md:flex-row">
                <div class="md:w-1/2">
                    <x-course-info
                        :course="$course"
                        class="md:sticky md:top-9"
                    />
                </div>
                <div class="flex w-full flex-col gap-4 md:w-1/2">
                    <div class="text-right text-xl font-medium">
                        <span>{{ $course->lessons()->count() }} lessons</span>
                        &middot;
                        <span>2h 25m</span>
                    </div>
                    <x-lessons :lessons="$course->lessons" />
                </div>
            </div>
        </x-container>
    </x-section>
</x-layouts.guest>
