<x-stack :$attributes>
    <x-like-button :is-liked="$comment->isLikedBy(auth()->user())">
        {{ $comment->likes()->count() }}
    </x-like-button>
    @if (! $isReply)
        @if ($comment->replies()->count())
            <x-button type="secondary" class="bg-gray-200 hover:bg-gray-300">
                <x-icon name="comment" size="xs" />
                {{ $comment->replies()->count() }}
            </x-button>
        @endif

        <x-button
            type="secondary"
            size="sm"
            class="bg-gray-200 hover:bg-gray-300"
        >
            Reply
        </x-button>
    @endif
</x-stack>
