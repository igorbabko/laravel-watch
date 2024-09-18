@props([
    "items",
])

<x-grid
    :attributes="$attributes->merge(['class' => 'grid-cols-2 md:grid-cols-1', 'tag' => 'ul'])"
>
    @foreach ($items as $item)
        <li>
            <x-checkbox>{{ $item->name ?? $item }}</x-checkbox>
        </li>
    @endforeach
</x-grid>
