@props([
    "isActive" => false,
])

<li>
    <a
        {{ $attributes->merge(["class" => "text-lg font-semibold transition-colors hover:text-purple-800" . ($isActive ? " text-purple-800" : "")]) }}
    >
        {{ $slot }}
    </a>
</li>
