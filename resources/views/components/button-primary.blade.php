@if ($attributes->has("href"))
    <a
        {{ $attributes->merge(["class" => "flex items-center justify-center gap-2 whitespace-nowrap rounded-lg px-4 py-3 font-semibold transition-colors bg-purple-500 text-white fill-white hover:bg-purple-600"]) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(["class" => "flex items-center justify-center gap-2 whitespace-nowrap rounded-lg px-4 py-3 font-semibold transition-colors bg-purple-500 text-white fill-white hover:bg-purple-600"]) }}
    >
        {{ $slot }}
    </button>
@endif
