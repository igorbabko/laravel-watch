@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "login" => "Log In",
        "register" => "Register",
    ];
@endphp

<nav {{ $attributes->merge(["class" => "lg:hidden"]) }}>
    <x-container centered class="flex-wrap justify-between py-2">
        <x-logo size="xl" class="z-20" />
        <x-mobile-nav.items :$items />
        <x-mobile-nav.button />
    </x-container>
</nav>
