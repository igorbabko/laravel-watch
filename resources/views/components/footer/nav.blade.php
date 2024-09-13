@php
    $items = [
        "index" => "Home",
        "courses.index" => "Courses",
        "contact" => "Contact",
        "privacy" => "Privacy",
        "terms" => "Terms",
    ];
@endphp

<x-stack
    :attributes="$attributes->merge(['class' => 'md:flex-row'])"
    tag="ul"
    column
>
    @foreach ($items as $routeName => $label)
        <x-footer.nav-item :href="route($routeName)">
            {{ $label }}
        </x-footer.nav-item>
    @endforeach
</x-stack>
