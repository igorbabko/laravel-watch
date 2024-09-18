<x-layouts.guest>
    <x-section>
        <x-container column gap="lg" class="pb-10 pt-24 md:pb-20 md:pt-32">
            <x-heading>{{ $course->title }}</x-heading>
            <x-stack column gap="lg" class="md:flex-row">
                <div class="md:w-1/2">
                    <x-course-info :$course class="md:sticky md:top-24" />
                </div>
                <x-stack column gap="md" class="w-full md:w-1/2">
                    <x-text
                        class="text-center md:text-right"
                        weight="semibold"
                        size="lg"
                        tag="div"
                    >
                        {{ $course->lessons()->count() }} lessons &middot; 2h
                        25m
                    </x-text>
                    <x-stack column gap="md">
                        @foreach ($course->lessons as $lesson)
                            <x-lesson :$lesson />
                        @endforeach
                    </x-stack>
                </x-stack>
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
