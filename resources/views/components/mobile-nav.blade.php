@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "login" => "Log In",
        "register" => "Register",
    ];
@endphp

<nav {{ $attributes->merge(["class" => "md:hidden"]) }}>
    <x-container>
        <x-stack centered class="flex-wrap justify-between py-2">
            <x-header.logo size="xl" class="z-20" />
            <x-mobile-nav.items :items="$items" />
            <x-mobile-nav.button />
        </x-stack>
    </x-container>
</nav>
