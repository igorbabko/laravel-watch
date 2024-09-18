<x-layouts.guest>
    <x-section>
        <x-hero />
    </x-section>
    <x-section>
        <x-container column gap="xl" class="pb-16 md:pb-24">
            <x-heading tag="h2" size="4xl">Topics</x-heading>
            <x-grid class="w-full md:grid-cols-3">
                @foreach ($tags as $tag)
                    <x-topic :$tag />
                @endforeach
            </x-grid>
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="pb-16 md:pb-24">
            <x-heading tag="h2" size="4xl">Latest Courses</x-heading>
            <x-grid class="w-full md:grid-cols-2">
                @foreach ($latestCourses as $course)
                    <x-course :$course />
                @endforeach
            </x-grid>
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="pb-16 md:pb-24">
            <x-heading tag="h2" size="4xl">Popular Courses</x-heading>
            <x-grid class="w-full md:grid-cols-2">
                @foreach ($popularCourses as $course)
                    <x-course :$course />
                @endforeach
            </x-grid>
        </x-container>
    </x-section>
</x-layouts.guest>
