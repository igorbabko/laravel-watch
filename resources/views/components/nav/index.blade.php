@props([
    "isMobile" => false,
    "items",
])

@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "login" => "Log In",
        "register" => "Register",
    ];

    $attributes = $isMobile
        ? $attributes->merge([
            "class" => "peer absolute inset-x-0 top-0 hidden bg-white pt-2 pb-4 px-4 mt-[70px] target:flex border-b",
            "column" => true,
            "tag" => "ul",
            "id" => "nav",
        ])
        : $attributes->merge(["class" => "justify-end", "tag" => "ul", "gap" => "xl"]);
@endphp

<nav>
    <x-stack :$attributes>
        @foreach ($items as $routeName => $label)
            <x-nav.item
                :href="route($routeName)"
                :is-active="request()->route()->named($routeName)"
            >
                {{ $label }}
            </x-nav.item>
        @endforeach
    </x-stack>
    @if ($isMobile)
        <x-nav.button />
    @endif
</nav>
