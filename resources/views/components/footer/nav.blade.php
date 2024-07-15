@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "privacy" => "Privacy",
        "terms" => "Terms",
    ];
@endphp

<ul
    {{ $attributes->merge(["class" => "flex flex-col gap-4 md:flex-row md:gap-6"]) }}
>
    @foreach ($items as $routeName => $label)
        <x-footer.nav-item :href="route($routeName)">
            {{ $label }}
        </x-footer.nav-item>
    @endforeach
</ul>
