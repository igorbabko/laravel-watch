<x-layouts.guest>
    <x-section>
        <x-container class="py-10 pt-20 md:py-20">
            <x-stack column centered gap="lg">
                <x-page-heading>Courses</x-page-heading>
                <x-stack
                    column
                    class="items-start gap-12 md:top-20 md:flex-row md:gap-6"
                >
                    <s-stack column class="w-full md:sticky md:top-20 md:w-1/4">
                        <x-filters :tags="$tags" />
                    </s-stack>
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
