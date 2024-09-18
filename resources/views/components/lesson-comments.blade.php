<x-heading tag="h2" size="4xl">
    Comments
    @if ($lesson->comments->count())
        ({{ $lesson->comments->count() }})
    @endif
</x-heading>
<x-comment-form />
@if ($lesson->comments->isNotEmpty())
    <x-stack column gap="md" class="mt-6">
        @foreach ($lesson->comments->filter(fn ($comment) => $comment->parent_id === null) as $i => $comment)
            <x-comment :$comment :$i />
            @if ($i === 2)
                <x-comment-form class="ml-8 md:ml-12" is-reply />
            @endif

            @foreach ($comment->replies as $j => $comment)
                <x-comment :$comment :i="$j" is-reply />
            @endforeach
        @endforeach
    </x-stack>
@endif
