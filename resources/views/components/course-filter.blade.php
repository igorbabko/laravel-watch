@props([
    "items",
])

<x-grid
    tag="ul"
    :attributes="$attributes->merge(['class' => 'grid-cols-2 sm:grid-cols-3 md:grid-cols-1'])"
>
    @foreach ($items as $item)
        <li>
            <x-checkbox class="text-md flex items-center" weight="semibold">
                {{ $item->name ?? $item }}
            </x-checkbox>
        </li>
    @endforeach
</x-grid>
