@props([
    "isActive" => false,
])

<li>
    <a
        {{ $attributes->merge(["class" => "inline-block w-full rounded-md p-4 text-xl font-bold transition-colors hover:bg-gray-100" . ($isActive ? " bg-gray-100" : "")]) }}
    >
        {{ $slot }}
    </a>
</li>
