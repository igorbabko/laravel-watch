<x-layouts.guest>
    <x-section>
        <x-container column gap="xl" class="pb-10 pt-24 md:pb-20 md:pt-32">
            <x-heading>Courses</x-heading>
            <x-stack column class="items-start md:top-20 md:flex-row" gap="xl">
                <x-stack column class="w-full md:sticky md:top-24 md:w-1/4">
                    <x-course-filter :items="$tags" />
                    <hr class="my-2 md:my-8" />
                    <x-course-filter
                        :items="['Beginner', 'Intermediate', 'Advanced']"
                    />
                    <hr class="my-2 md:my-8" />
                    <x-course-filter :items="['Free', 'Paid']" />
                </x-stack>
                <x-stack column gap="md" class="md:w-3/4">
                    <x-course-search />
                    <x-grid class="w-full md:grid-cols-2">
                        @foreach ($courses as $course)
                            <x-course :$course />
                        @endforeach
                    </x-grid>
                    <x-pagination />
                </x-stack>
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
