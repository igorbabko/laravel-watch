<x-stack column gap="sm" :attributes="$attributes">
    <x-stack gap="sm" class="items-center">
        <img
            src="https://i.pravatar.cc/64?img={{ $i }}"
            class="size-10 rounded-full"
            alt=""
        />
        <span class="font-medium">{{ $comment->user->name }}</span>
    </x-stack>
    <div>{{ $comment->body }}</div>
</x-stack>
