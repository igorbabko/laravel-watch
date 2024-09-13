@props(["isActive" => false])

@php
    $attributes = $attributes->class(["bg-gray-100" => $isActive])->merge([
        "class" => "inline-block w-full rounded-md p-4 text-lg hover:bg-gray-100",
        "weight" => "semibold",
        "tag" => "a",
    ]);
@endphp

<li>
    <x-text :$attributes>
        {{ $slot }}
    </x-text>
</li>
