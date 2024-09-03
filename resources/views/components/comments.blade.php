<x-stack column :attributes="$attributes">
    <h2 class="text-xl font-bold md:mb-4 md:text-2xl">
        Comments ({{ $comments->count() }})
    </h2>
    <x-comment-form />
    @if ($comments->isNotEmpty())
        <x-stack column class="mt-6">
            @foreach ($comments->filter(fn ($comment) => $comment->parent_id === null) as $i => $comment)
                <x-comment :comment="$comment" :i="$i" />
                @foreach ($comment->replies as $j => $comment)
                    <x-comment :comment="$comment" :i="$j" is-reply />
                @endforeach
            @endforeach
        </x-stack>
    @endif
</x-stack>
