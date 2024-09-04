<x-card
    :attributes="$attributes->merge(['class' => 'bg-gray-100 hover:bg-gray-200'])"
>
    <a href="{{ route("lessons.show", $lesson) }}">
        <x-stack column gap="sm" class="p-4">
            <x-stack>
                <span class="font-mono text-sm font-bold">
                    {{ Str::padLeft($lesson->number, 2, 0) }}
                </span>
                <div
                    class="ml-auto flex items-center gap-2 whitespace-nowrap font-medium text-gray-600"
                >
                    {{-- <x-icon name="clock" /> --}}
                    <span class="font-mono text-sm">5m 32s</span>
                </div>
            </x-stack>
            <x-heading tag="h3" class="text-base">
                {{ $lesson->title }}
            </x-heading>
        </x-stack>
    </a>
</x-card>
