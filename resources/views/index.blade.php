<x-layout>
    <section class="relative px-10">
        <div class="flex flex-col justify-center items-center gap-2 container min-h-screen py-40">
            <div class="flex flex-col gap-2">
                <h1 class="text-center font-extrabold text-5xl">
                    Learn Web Development
                </h1>
            </div>
            <p class="text-center text-xl font-medium">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, quis.
            </p>
            <div class="flex gap-2 mt-6">
                <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600"
                   href="{{ route('register') }}">
                    Get Started
                </a>
                <a class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200"
                   href="{{ route('courses') }}">
                    Explore Courses
                </a>
            </div>
        </div>
    </section>
</x-layout>
