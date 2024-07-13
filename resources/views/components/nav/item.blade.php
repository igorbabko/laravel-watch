@props([
    "isActive" => false,
])

<li>
    <a
        {{ $attributes->merge(["class" => "text-xl font-bold transition-colors hover:text-purple-800" . ($isActive ? " text-purple-800" : "")]) }}
    >
        {{ $slot }}
    </a>
</li>
