@props([
    "items",
])

<x-stack
    tag="ul"
    gap="10"
    :attributes="$attributes->merge(['class' => 'justify-end'])"
>
    @foreach ($items as $routeName => $label)
        <x-nav.item
            :href="route($routeName)"
            :is-active="request()->route()->named($routeName)"
        >
            {{ $label }}
        </x-nav.item>
    @endforeach
</x-stack>
