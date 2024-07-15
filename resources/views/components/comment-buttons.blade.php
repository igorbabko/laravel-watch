<div {{ $attributes->merge(["class" => "flex items-center gap-2"]) }}>
    <x-button type="secondary" class="bg-gray-200 hover:bg-gray-300">
        <x-icon name="heart" class="size-4" />
        3
    </x-button>
    @if (! $isReply)
        <x-button type="secondary" class="bg-gray-200 hover:bg-gray-300">
            <x-icon name="comment" class="size-4" />
            2
        </x-button>
        <x-button
            type="secondary"
            class="ml-auto bg-gray-200 hover:bg-gray-300"
        >
            Reply
        </x-button>
    @endif
</div>
