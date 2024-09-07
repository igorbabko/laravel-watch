@props([
    "items",
])

<x-grid
    tag="ul"
    :attributes="$attributes->merge(['class' => 'grid-cols-2 sm:grid-cols-3 md:grid-cols-1'])"
>
    @foreach ($items as $item)
        <li>
            <x-filter-item>{{ $item->name ?? $item }}</x-filter-item>
        </li>
    @endforeach
</x-grid>
