<x-stack :$attributes>
    <x-comment.like :is-liked="$comment->isLikedBy(auth()->user())">
        {{ $comment->likes()->count() }}
    </x-comment.like>
    @if (! $isReply)
        @if ($comment->replies()->count())
            <x-button type="secondary" class="bg-gray-200 hover:bg-gray-300">
                <x-icon name="comment" size="xs" />
                {{ $comment->replies()->count() }}
            </x-button>
        @endif

        <x-button class="bg-gray-200 hover:bg-gray-300" type="secondary">
            Reply
        </x-button>
    @endif
</x-stack>
