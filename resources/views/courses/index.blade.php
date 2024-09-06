<x-layouts.guest>
    <x-section>
        <x-container class="py-10 pt-20 md:py-20">
            <x-stack column centered gap="lg">
                <x-heading>Courses</x-heading>
                <x-stack
                    column
                    class="items-start md:top-20 md:flex-row"
                    gap="xl"
                >
                    <x-stack column class="w-full md:sticky md:top-24 md:w-1/4">
                        <x-filters :tags="$tags" />
                    </x-stack>
                    <x-stack column class="md:w-3/4">
                        <x-search-form />
                        <x-courses :courses="$courses" />
                        <x-pagination />
                    </x-stack>
                </x-stack>
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
