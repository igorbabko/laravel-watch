@props([
    "items",
])

<ul {{ $attributes->merge(["class" => "flex gap-8 lg:gap-10"]) }}>
    @foreach ($items as $routeName => $label)
        <x-nav.item
            :href="route($routeName)"
            :is-active="request()->route()->named($routeName)"
        >
            {{ $label }}
        </x-nav.item>
    @endforeach
</ul>
