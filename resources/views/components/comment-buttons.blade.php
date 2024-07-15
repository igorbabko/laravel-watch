<div {{ $attributes->merge(["class" => "flex items-center gap-2"]) }}>
    <x-button type="secondary" size="sm" class="bg-gray-200 hover:bg-gray-300">
        <x-icon name="heart" class="size-4" />
        @if ($comment->likes()->count())
            {{ $comment->likes()->count() }}
        @endif
    </x-button>
    @if (! $isReply)
        @if ($comment->replies()->count())
            <x-button
                type="secondary"
                size="sm"
                class="bg-gray-200 hover:bg-gray-300"
            >
                <x-icon name="comment" class="size-4" />
                {{ $comment->replies()->count() }}
            </x-button>
        @endif

        <x-button
            type="secondary"
            size="sm"
            class="ml-auto bg-gray-200 hover:bg-gray-300"
        >
            Reply
        </x-button>
    @endif
</div>
