@props([
    "items",
])

<x-stack
    :attributes="$attributes->merge(['class' => 'justify-end', 'gap' => 10, 'tag' => 'ul'])"
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
