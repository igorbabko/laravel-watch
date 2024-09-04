<x-layouts.guest>
    <x-section>
        <x-container class="pb-10 pt-20 md:py-20">
            <x-stack column>
                <x-heading>{{ $course->title }}</x-heading>
                <x-stack column gap="lg" class="md:flex-row">
                    <div class="md:w-1/2">
                        <x-course-info
                            :course="$course"
                            class="md:sticky md:top-24"
                        />
                    </div>
                    <x-stack column class="w-full md:w-1/2">
                        <div class="text-right text-xl font-medium">
                            <span>
                                {{ $course->lessons()->count() }} lessons
                            </span>
                            &middot;
                            <span>2h 25m</span>
                        </div>
                        <x-lessons :lessons="$course->lessons" />
                    </x-stack>
                </x-stack>
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
