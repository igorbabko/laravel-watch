@props(["type" => "primary", "size" => "md"])

@if ($attributes->has("href"))
    <a
        {{
            $attributes
                ->class([
                    "bg-purple-500 text-white fill-white hover:bg-purple-600" => $type === "primary",
                    "bg-gray-100 hover:bg-gray-200" => $type === "secondary",
                    "px-3 py-1.5 text-sm" => $size === "sm",
                    "px-4 py-3" => $size === "md",
                    "px-4 py-2 lg:px-6 lg:py-4 text-sm lg:text-lg" => $size === "lg",
                ])
                ->merge(["class" => "flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium"])
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
                    "px-3 py-1.5 text-sm" => $size === "sm",
                    "px-4 py-3" => $size === "md",
                    "px-6 py-4 text-lg" => $size === "lg",
                ])
                ->merge(["class" => "flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium"])
        }}
    >
        {{ $slot }}
    </button>
@endif
