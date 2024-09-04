<x-stack column gap="sm" :attributes="$attributes">
    <x-stack gap="sm" class="items-center">
        <img
            src="https://i.pravatar.cc/64?img={{ $i }}"
            class="size-10 rounded-full"
            alt=""
        />
        <x-text bold>{{ $comment->user->name }}</x-text>
    </x-stack>
    <x-text>{{ $comment->body }}</x-text>
</x-stack>
