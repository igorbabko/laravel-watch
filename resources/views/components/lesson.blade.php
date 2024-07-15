<x-card
    :attributes="$attributes->merge(['class' => 'bg-gray-100 transition-colors hover:bg-gray-200'])"
>
    <a
        href="{{ route("lessons.show", $lesson->slug) }}"
        class="flex flex-col gap-2 p-4"
    >
        <div class="flex justify-between">
            <span class="text-sm font-bold">{{ $lesson->id }}</span>
            <div
                class="ml-auto flex items-center gap-2 whitespace-nowrap font-medium text-gray-600"
            >
                <x-icon name="clock" class="size-4" />
                <span class="text-sm">5m 32s</span>
            </div>
        </div>
        <h3 class="font-medium">{{ $lesson->title }}</h3>
    </a>
</x-card>
