@props(["type" => "primary"])

@if ($attributes->has("href"))
    <a
        {{
            $attributes
                ->class([
                    "bg-purple-500 text-white fill-white hover:bg-purple-600" => $type === "primary",
                    "bg-gray-100 hover:bg-gray-200" => $type === "secondary",
                ])
                ->merge(["class" => "flex items-center justify-center gap-2 whitespace-nowrap rounded-lg px-3 py-1.5 text-sm font-semibold transition-colors md:px-4 md:py-3 md:text-base"])
        }}
    >
        {{ $slot }}
    </a>
@else
    <button
        {{
            $attributes
                ->class([
                    "bg-purple-500 text-white fill-white hover:bg-purple-600" => $type === "primary",
                    "bg-gray-100 hover:bg-gray-200" => $type === "secondary",
                ])
                ->merge(["class" => "flex items-center justify-center gap-2 whitespace-nowrap rounded-lg px-3 py-1.5 text-sm font-semibold transition-colors md:px-4 md:py-3 md:text-base"])
        }}
    >
        {{ $slot }}
    </button>
@endif
