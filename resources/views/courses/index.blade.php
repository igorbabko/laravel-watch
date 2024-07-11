<x-layout>
    <x-section>
        <div class="container mx-auto flex flex-col items-center gap-6 py-20">
            <x-heading>Courses</x-heading>
            <div class="flex gap-6">
                {{-- <h2 class="text-3xl font-semibold">Topics</h2> --}}
                <div class="flex w-1/4 flex-col">
                    <ul class="space-y-4">
                        <li>
                            <x-filter-item>Laravel</x-filter-item>
                        </li>
                        <li>
                            <x-filter-item>Symfony</x-filter-item>
                        </li>
                        <li>
                            <x-filter-item>Laravel</x-filter-item>
                        </li>
                        <li>
                            <x-filter-item>Laravel</x-filter-item>
                        </li>
                        <li>
                            <x-filter-item>Laravel</x-filter-item>
                        </li>
                        <li>
                            <x-filter-item>Laravel</x-filter-item>
                        </li>
                    </ul>
                    <hr class="my-8" />
                    <ul class="space-y-4">
                        <li>
                            <x-filter-item>Beginner</x-filter-item>
                        </li>
                        <li>
                            <x-filter-item>Intermediate</x-filter-item>
                        </li>
                        <li>
                            <x-filter-item>Advanced</x-filter-item>
                        </li>
                    </ul>
                    <hr class="my-8" />
                    <ul class="space-y-4">
                        <li>
                            <x-filter-item>Free</x-filter-item>
                        </li>
                        <li>
                            <x-filter-item>Paid</x-filter-item>
                        </li>
                    </ul>
                </div>
                <div class="flex w-3/4 flex-col gap-8">
                    <form action="/" class="flex gap-1">
                        <input
                            class="flex-grow rounded-lg border-2 px-4 py-2"
                            type="search"
                            placeholder="Search by course title or description"
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
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                        <x-course />
                    </div>
                </div>
            </div>
        </div>
    </x-section>
</x-layout>
