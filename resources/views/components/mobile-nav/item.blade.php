@props(["isActive" => false])

@php
    $attributes = $attributes
        ->class(["bg-gray-100" => $isActive])
        ->merge(["class" => "inline-block w-full rounded-md p-4 text-lg hover:bg-gray-100"]);
@endphp

<li>
    <x-text tag="a" weight="semibold" :$attributes>
        {{ $slot }}
    </x-text>
</li>
