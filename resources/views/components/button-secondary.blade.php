@if ($attributes->has("href"))
    <a
        {{ $attributes->merge(["class" => "flex items-center justify-center gap-2 whitespace-nowrap rounded-lg px-4 py-3 font-semibold transition-colors bg-gray-100 hover:bg-gray-200"]) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(["class" => "flex items-center justify-center gap-2 whitespace-nowrap rounded-lg px-4 py-3 font-semibold transition-colors bg-gray-100 hover:bg-gray-200"]) }}
    >
        {{ $slot }}
    </button>
@endif
