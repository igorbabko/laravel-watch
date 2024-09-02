@if ($isLiked)
    <x-button
        type="secondary"
        size="sm"
        :attributes="$attributes->merge(['class' => 'bg-pink-100 text-pink-600 hover:bg-pink-200'])"
    >
        <x-icon name="heart-filled" size="xs" class="fill-pink-600" />
        {{ $slot }}
    </x-button>
@else
    <x-button
        type="secondary"
        size="sm"
        :attributes="$attributes->merge(['class' => 'bg-gray-200 hover:bg-gray-300'])"
    >
        <x-icon name="heart" size="xs" />
        {{ $slot }}
    </x-button>
@endif
