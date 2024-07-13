@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "login" => "Log In",
        "register" => "Register",
    ];
@endphp

<nav class="hidden md:block">
    <x-container class="flex items-center justify-between py-4">
        <x-header.logo>Watch</x-header.logo>
        <x-nav.items :items="$items" />
    </x-container>
</nav>
