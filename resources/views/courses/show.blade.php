<x-layouts.guest>
    <x-section>
        <x-container column class="pb-10 pt-20 md:py-20">
            <x-heading>{{ $course->title }}</x-heading>
            <x-stack column gap="lg" class="md:flex-row">
                <div class="md:w-1/2">
                    <x-course-info :$course class="md:sticky md:top-24" />
                </div>
                <x-stack column class="w-full md:w-1/2">
                    <x-text
                        size="lg"
                        weight="semibold"
                        tag="div"
                        class="text-right"
                    >
                        {{ $course->lessons()->count() }} lessons &middot; 2h
                        25m
                    </x-text>
                    <x-stack column>
                        @foreach ($course->lessons as $lesson)
                            <x-lesson :$lesson />
                        @endforeach
                    </x-stack>
                </x-stack>
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
