<x-layouts.guest>
    <x-section>
        <x-container class="flex flex-col items-center gap-6 py-20">
            <x-heading>Courses</x-heading>
            <div class="top-20 flex items-start gap-6">
                <div class="sticky top-9 flex w-1/4 flex-col">
                    <x-filters />
                </div>
                <div class="flex w-3/4 flex-col gap-6">
                    <x-search-form />
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
