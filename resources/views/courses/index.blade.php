<x-layouts.guest>
    <x-section>
        {{-- <x-circles class="-right-40 -top-40 rotate-90" /> --}}
        <x-container class="flex flex-col items-center gap-6 py-20">
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
                            <x-icon-magnifying-glass />
                        </x-button>
                    </form>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach (range(1, 10) as $i)
                            <x-course />
                        @endforeach
                    </div>
                </div>
            </div>
        </x-container>
    </x-section>
</x-layouts.guest>
