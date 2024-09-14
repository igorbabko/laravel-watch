@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "privacy" => "Privacy",
        "terms" => "Terms",
    ];

    $attributes = $attributes->merge([
        "class" => "md:flex-row",
        "column" => true,
        "tag" => "ul",
        "gap" => "md",
    ]);
@endphp

<x-stack :$attributes>
    @foreach ($items as $routeName => $label)
        <x-footer.nav-item :href="route($routeName)">
            {{ $label }}
        </x-footer.nav-item>
    @endforeach
</x-stack>
