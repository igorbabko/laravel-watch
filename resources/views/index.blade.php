<x-layouts.guest>
    <x-section>
        <x-container
            class="pb-16 pt-28 md:min-h-screen md:py-40"
            centered
            column
        >
            <x-heading>Learn Web Development</x-heading>
            <x-text centered weight="medium" size="xl">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Nostrum, quis.
            </x-text>
            <x-stack column class="mt-6 md:flex-row">
                <x-button :href="route('register')">Get Started</x-button>
                <x-button type="secondary" :href="route('courses.index')">
                    Explore Courses
                </x-button>
            </x-stack>
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="pb-16 md:pb-24">
            <x-heading tag="h2" size="4xl">Topics</x-heading>
            <x-grid class="w-full sm:grid-cols-2 md:grid-cols-3">
                @foreach ($tags as $tag)
                    <x-topic :$tag />
                @endforeach
            </x-grid>
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="pb-16 md:pb-24">
            <x-heading tag="h2" size="4xl">Latest Courses</x-heading>
            <x-grid class="w-full lg:grid-cols-2">
                @foreach ($latestCourses as $course)
                    <x-course :$course />
                @endforeach
            </x-grid>
        </x-container>
    </x-section>
    <x-section>
        <x-container column gap="xl" class="pb-16 md:pb-24">
            <x-heading tag="h2" size="4xl">Popular Courses</x-heading>
            <x-grid class="w-full lg:grid-cols-2">
                @foreach ($popularCourses as $course)
                    <x-course :$course />
                @endforeach
            </x-grid>
        </x-container>
    </x-section>
</x-layouts.guest>
