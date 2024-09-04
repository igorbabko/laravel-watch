@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "login" => "Log In",
        "register" => "Register",
    ];
@endphp

<nav {{ $attributes->merge(["class" => "hidden md:block"]) }}>
    <x-container>
        <x-stack centered class="justify-between py-4">
            <x-header.logo>Watch</x-header.logo>
            <x-nav.items :items="$items" />
        </x-stack>
    </x-container>
</nav>
