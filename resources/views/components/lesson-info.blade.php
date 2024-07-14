<div class="flex flex-col">
    <div class="mb-2 mt-8 flex items-center justify-between md:mb-4">
        <a
            href="{{ route("courses.show", 1) }}"
            class="flex items-center gap-2 text-lg font-bold transition-colors hover:fill-purple-500 hover:text-purple-500 md:gap-3 md:text-2xl"
        >
            <x-icon name="chevron-left" class="size-4 md:size-6" />
            Course Title
        </a>
        <x-button-secondary :href="route('index')">
            <x-icon name="github" class="size-6" />
            Source Code
        </x-button-secondary>
    </div>
    <x-video />
    <div
        class="mt-2 flex flex-col items-start justify-between gap-2 md:mt-4 md:flex-row md:gap-6 lg:gap-10"
    >
        <h1 class="order-2 text-lg font-semibold md:order-1 lg:text-xl">
            01. Lorem ipsum dolor sit amet, consectetur adipisicing
        </h1>
        <div class="order-1 flex w-full gap-2 md:order-2 md:items-start">
            <x-lesson-controls />
        </div>
    </div>
</div>
