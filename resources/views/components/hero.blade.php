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
            <h1
                class="text-center text-4xl font-black sm:text-5xl md:text-7xl"
                id="a"
            >
                Learn Web Development
            </h1>
            <p
                class="mb-6 mt-1 text-center text-lg font-medium sm:mb-8 sm:text-xl md:mb-10 md:mt-2 md:text-2xl"
            >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Nostrum, quis.
            </p>
            <x-stack column gap="sm" class="md:flex-row">
                <x-button :href="route('register')" size="lg">
                    Get Started
                </x-button>
                <x-button
                    type="secondary"
                    size="lg"
                    :href="route('courses.index')"
                >
                    Explore Courses
                </x-button>
            </x-stack>
        </x-stack>
    </x-container>
</x-section>
