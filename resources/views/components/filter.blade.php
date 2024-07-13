@props([
    "items",
])

<ul class="space-y-4">
    @foreach ($items as $item)
        <li class="flex">
            <x-filter-item>{{ $item }}</x-filter-item>
        </li>
    @endforeach
</ul>
