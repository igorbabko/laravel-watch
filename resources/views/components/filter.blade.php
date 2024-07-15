@props([
    "items",
])

<ul
    {{ $attributes->merge(["class" => "grid grid-cols-2 gap-4 sm:grid-cols-3 md:block md:gap-6 md:space-y-4"]) }}
>
    @foreach ($items as $item)
        <li class="flex">
            <x-filter-item>{{ $item->name ?? $item }}</x-filter-item>
        </li>
    @endforeach
</ul>
