<x-card
    :attributes="$attributes->merge([
        'class' => 'bg-gray-100 hover:bg-gray-200',
        'href' => route('lessons.show', $lesson),
        'tag' => 'a',
    ])"
>
    <x-stack column class="p-4">
        <x-stack class="justify-between font-mono">
            <x-text tag="span" size="sm">
                {{ Str::padLeft($lesson->number, 2, 0) }}
            </x-text>
            <x-text tag="span" size="sm" class="text-gray-600">5m 32s</x-text>
        </x-stack>
        <x-heading tag="h3" size="base">{{ $lesson->title }}</x-heading>
    </x-stack>
</x-card>
