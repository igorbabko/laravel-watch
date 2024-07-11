@props(["type" => "button"])

@if ($type === "link")
    <a
        {{ $attributes->merge(["class" => "ml-auto flex gap-2 rounded-lg bg-purple-500 px-4 py-3 font-semibold text-white hover:bg-purple-600"]) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(["class" => "ml-auto flex gap-2 rounded-lg bg-purple-500 px-4 py-3 font-semibold text-white hover:bg-purple-600"]) }}
    >
        {{ $slot }}
    </button>
@endif
