<x-section :attributes="$attributes">
    <style>
        #a {
            background: #854ccf;
            background: linear-gradient(
                to right,
                #854ccf 20%,
                #ff1342 59%,
                #cf10a2 78%
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

    <x-container class="pb-16 pt-28 md:min-h-screen md:py-40">
        <x-stack column centered class="self-center">
            <x-heading id="a" weight="black">Learn Web Development</x-heading>
            <x-text bold size="lg" class="mb-6 text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Nostrum, quis.
            </x-text>
            <x-stack column class="md:flex-row">
                <x-button :href="route('register')">Get Started</x-button>
                <x-button type="secondary" :href="route('courses.index')">
                    Explore Courses
                </x-button>
            </x-stack>
        </x-stack>
    </x-container>
</x-section>
