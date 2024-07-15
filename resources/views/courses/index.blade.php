<x-layouts.guest>
    <x-section>
        <x-container
            class="flex flex-col items-center gap-6 py-10 pt-20 md:py-20"
        >
            <x-heading>Courses</x-heading>
            <div
                class="flex flex-col items-start gap-12 md:top-20 md:flex-row md:gap-6"
            >
                <div class="flex w-full flex-col md:sticky md:top-9 md:w-1/4">
                    <x-filters :tags="$tags" />
                </div>
                <div class="flex flex-col gap-4 md:w-3/4 md:gap-6">
                    <x-search-form />
                    <x-courses :courses="$courses" />
                    <x-pagination />
                </div>
            </div>
        </x-container>
    </x-section>
</x-layouts.guest>
