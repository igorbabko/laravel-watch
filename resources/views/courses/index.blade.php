<x-layout>
    <x-section>
        {{-- <x-circles class="-right-40 -top-40 rotate-90" /> --}}
        <div class="container mx-auto flex flex-col items-center gap-6 py-20">
            <x-heading>Courses</x-heading>
            <div class="top-20 flex items-start gap-6">
                <div class="sticky top-9 flex w-1/4 flex-col">
                    <x-filters
                        :items="['Laravel', 'Symfony', 'Vue', 'React', 'Angular', 'Nuxt', 'Tailwind CSS']"
                    />
                    <hr class="my-8" />
                    <x-filters
                        :items="['Beginner', 'Intermediate', 'Advanced']"
                    />
                    <hr class="my-8" />
                    <x-filters :items="['Free', 'Paid']" />
                </div>
                <div class="flex w-3/4 flex-col gap-6">
                    <form action="/" class="flex gap-2">
                        <x-input
                            type="search"
                            placeholder="Search by course title or description"
                            class="flex-grow"
                        />
                        <x-button>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="size-6 fill-white"
                            >
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"
                                />
                            </svg>
                        </x-button>
                    </form>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach (range(1, 10) as $i)
                            <x-course />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-section>
</x-layout>
