<x-layouts.guest>
    <x-section>
        <x-container column gap="xl" class="pb-10 pt-12 md:pb-10 md:pt-20">
            <x-heading>
                {{ Str::padLeft($lesson->number, 2, 0) }}.
                {{ $lesson->title }}
            </x-heading>
            <x-lesson.info :$lesson />
            <x-stack :attributes="$attributes->merge(['column' => true])">
                <x-heading tag="h2">
                    Comments ({{ $lesson->comments->count() }})
                </x-heading>
                <x-comment-form />
                @if ($lesson->comments->isNotEmpty())
                    <x-stack column class="mt-6">
                        @foreach ($lesson->comments->filter(fn ($comment) => $comment->parent_id === null) as $i => $comment)
                            <x-comment :$comment :$i />

                            @if ($i === 2)
                                <x-comment-form
                                    class="ml-8 md:ml-12"
                                    is-reply
                                />
                            @endif

                            @foreach ($lesson->comment->replies as $j => $comment)
                                <x-comment :$comment :i="$j" is-reply />
                            @endforeach
                        @endforeach
                    </x-stack>
                @endif
            </x-stack>
        </x-container>
    </x-section>
</x-layouts.guest>
