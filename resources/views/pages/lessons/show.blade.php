<x-layouts.guest>
    <x-section>
        <x-container column gap="xl" class="pb-10 pt-24 md:pb-20 md:pt-32">
            <x-heading>
                {{ Str::padLeft($lesson->number, 2, 0) }}.
                {{ $lesson->title }}
            </x-heading>
            <x-stack column gap="xs">
                <x-video />
                <x-lesson-buttons :$lesson />
            </x-stack>
            <x-stack column gap="md">
                <x-heading tag="h2" size="4xl">
                    Comments ({{ $lesson->comments->count() }})
                </x-heading>
                <x-comment-form />
                @if ($lesson->comments->isNotEmpty())
                    <x-stack column gap="md" class="mt-6">
                        @foreach ($lesson->comments->filter(fn ($comment) => $comment->parent_id === null) as $i => $comment)
                            <x-comment :$comment :$i />

                            @if ($i === 2)
                                <x-comment-form
                                    class="ml-8 md:ml-12"
                                    is-reply
                                />
                            @endif

                            @foreach ($comment->replies as $j => $comment)
                                <x-comment :$comment :i="$j" is-reply />
                            @endforeach
                        @endforeach
                    </x-stack>
                @endif
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
