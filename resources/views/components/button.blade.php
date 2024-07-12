@props(["type" => "primary"])

@php
    $classes =
        "flex items-center justify-center gap-2 whitespace-nowrap rounded-lg px-4 py-3 font-semibold";

    $classes .=
        $type === "primary"
            ? " bg-purple-500 text-white fill-white hover:bg-purple-600"
            : " bg-gray-100 hover:bg-gray-200";
@endphp

@if ($attributes->has("href"))
    <a {{ $attributes->merge(["class" => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(["class" => $classes]) }}>
        {{ $slot }}
    </button>
@endif
