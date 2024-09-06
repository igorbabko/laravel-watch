@props([
    "items",
])

<ul
    {{ $attributes->merge(["class" => "peer absolute inset-x-0 top-0 hidden flex-col bg-white p-4 pt-[64px] target:flex border-b", "id" => "nav", "gap" => "xs"]) }}
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
