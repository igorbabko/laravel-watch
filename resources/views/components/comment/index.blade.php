@props([
    "isReply" => false,
    "comment",
    "i",
])

<x-card
    :attributes="$attributes->class(['ml-8 md:ml-12' => $isReply])->merge(['class' => 'bg-gray-100 p-4'])"
>
    <x-stack column>
        <div class="relative">
            <x-text
                tag="span"
                size="sm"
                class="absolute right-0 top-0 self-start text-gray-500"
            >
                {{ $comment->created_at->diffForHumans() }}
            </x-text>
            <x-stack column>
                <x-stack class="items-center">
                    <img
                        src="https://i.pravatar.cc/64?img={{ $i }}"
                        class="size-10 rounded-full"
                        alt=""
                    />
                    <x-text bold>{{ $comment->user->name }}</x-text>
                </x-stack>
                <x-text>{{ $comment->body }}</x-text>
            </x-stack>
        </div>
        <x-comment.buttons :$comment :is-reply="$isReply" />
    </x-stack>
</x-card>
