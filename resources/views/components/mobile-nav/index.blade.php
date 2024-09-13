@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "login" => "Log In",
        "register" => "Register",
    ];

    $attributes = $attributes->merge([
        "class" => "peer absolute inset-x-0 top-0 hidden bg-white pb-2 px-2 mt-[70px] target:flex border-b",
        "column" => true,
        "tag" => "ul",
        "id" => "nav",
    ]);
@endphp

<nav>
    <x-stack :$attributes>
        @foreach ($items as $routeName => $label)
            <x-nav.item
                :href="route($routeName)"
                :is-active="request()->route()->named($routeName)"
                is-mobile
            >
                {{ $label }}
            </x-nav.item>
        @endforeach
    </x-stack>
    <x-nav.button />
</nav>
