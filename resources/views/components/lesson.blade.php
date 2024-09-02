<x-card
    :attributes="$attributes->merge(['class' => 'bg-gray-100 hover:bg-gray-200'])"
>
    <a
        href="{{ route("lessons.show", $lesson) }}"
        class="flex flex-col gap-2 p-4"
    >
        <div class="flex justify-between">
            <span class="font-mono text-sm font-bold">
                {{ Str::padLeft($lesson->number, 2, 0) }}
            </span>
            <div
                class="ml-auto flex items-center gap-2 whitespace-nowrap font-medium text-gray-600"
            >
                {{-- <x-icon name="clock" /> --}}
                <span class="font-mono text-sm">5m 32s</span>
            </div>
        </div>
        <h3 class="font-medium">{{ $lesson->title }}</h3>
    </a>
</x-card>
