<x-stack :attributes="$attributes->merge(['column' => true])">
    <x-heading tag="h2">Comments ({{ $comments->count() }})</x-heading>
    <x-comment-form />
    @if ($comments->isNotEmpty())
        <x-stack column class="mt-6">
            @foreach ($comments->filter(fn ($comment) => $comment->parent_id === null) as $i => $comment)
                <x-comment :$comment :$i />
                @foreach ($comment->replies as $j => $comment)
                    <x-comment :$comment :i="$j" is-reply />
                @endforeach
            @endforeach
        </x-stack>
    @endif
</x-stack>
