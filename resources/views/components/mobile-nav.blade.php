@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "login" => "Log In",
        "register" => "Register",
    ];
@endphp

<nav class="md:hidden">
    <x-container class="flex flex-wrap items-center justify-between py-2">
        <x-header.logo class="z-20" />
        <x-mobile-nav.items :items="$items" />
        <x-mobile-nav.button />
    </x-container>
</nav>
