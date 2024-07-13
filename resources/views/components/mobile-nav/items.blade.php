@props([
    "items",
])

<ul
    id="nav"
    class="peer absolute inset-x-0 top-0 hidden flex-col gap-1 bg-white p-4 pt-[64px] shadow target:flex"
>
    @foreach ($items as $routeName => $label)
        <x-mobile-nav.item
            :href="route($routeName)"
            :is-active="request()->route()->named($routeName)"
        >
            {{ $label }}
        </x-mobile-nav.item>
    @endforeach
</ul>
