<x-layouts.guest>
    <x-section>
        <x-container class="pb-10 pt-20 md:py-20">
            <x-stack column>
                <x-heading>{{ $course->title }}</x-heading>
                <x-stack column gap="6" class="md:flex-row">
                    <div class="md:w-1/2">
                        <x-course-info
                            :course="$course"
                            class="md:sticky md:top-24"
                        />
                    </div>
                    <x-stack column class="w-full md:w-1/2">
                        <x-text bold size="lg" tag="div" class="text-right">
                            {{ $course->lessons()->count() }} lessons &middot;
                            2h 25m
                        </x-text>
                        <x-lessons :lessons="$course->lessons" />
                    </x-stack>
                </x-stack>
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
