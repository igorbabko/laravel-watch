@props([
    "isActive" => false,
])

<li>
    <a
        {{ $attributes->merge(["class" => "text-lg font-semibold hover:text-purple-600" . ($isActive ? " text-purple-600" : "")]) }}
    >
        {{ $slot }}
    </a>
</li>
