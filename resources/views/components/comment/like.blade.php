@php
    $attributes = $attributes
        ->class([
            "bg-pink-100 text-pink-600 hover:bg-pink-200" => $isLiked,
            "bg-gray-200 hover:bg-gray-300" => ! $isLiked,
        ])
        ->merge([
            "type" => "secondary",
            "size" => "sm",
        ]);
@endphp

<x-button :$attributes>
    @if ($isLiked)
        <x-icon name="heart-filled" size="xs" class="fill-pink-600" />
    @else
        <x-icon name="heart" size="xs" />
    @endif
    {{ $slot }}
</x-button>
