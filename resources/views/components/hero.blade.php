<x-section :$attributes>
    <x-container column centered class="pb-16 pt-28 md:min-h-screen md:py-40">
        <x-heading>Learn Web Development</x-heading>
        <x-text weight="medium" size="xl" class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum,
            quis.
        </x-text>
        <x-stack column centered class="mt-6 md:flex-row">
            <x-button :href="route('register')">Get Started</x-button>
            <x-button type="secondary" :href="route('courses.index')">
                Explore Courses
            </x-button>
        </x-stack>
    </x-container>
</x-section>
