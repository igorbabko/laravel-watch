@props([
    "isActive" => false,
])

<li>
    <a
        {{ $attributes->merge(["class" => "text-xl font-medium transition-colors hover:text-purple-800" . ($isActive ? " text-purple-800" : "")]) }}
    >
        {{ $slot }}
    </a>
</li>
