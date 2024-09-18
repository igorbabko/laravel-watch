<x-container class="pb-16 pt-28 md:min-h-screen md:py-40" centered column>
    <x-heading>Learn Web Development</x-heading>
    <x-text centered weight="medium" size="xl">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, quis.
    </x-text>
    <x-stack column class="mt-6 md:flex-row">
        <x-button :href="route('register')">Get Started</x-button>
        <x-button type="secondary" :href="route('courses.index')">
            Explore Courses
        </x-button>
    </x-stack>
</x-container>
