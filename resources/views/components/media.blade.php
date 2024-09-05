<x-stack column gap="2" :attributes="$attributes">
    <x-stack gap="2" class="items-center">
        <img
            src="https://i.pravatar.cc/64?img={{ $i }}"
            class="size-10 rounded-full"
            alt=""
        />
        <x-text bold>{{ $comment->user->name }}</x-text>
    </x-stack>
    <x-text>{{ $comment->body }}</x-text>
</x-stack>
