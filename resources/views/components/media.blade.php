<div {{ $attributes->merge(["class" => "flex flex-col gap-2"]) }}>
    <div class="flex items-center gap-2">
        <img
            src="https://i.pravatar.cc/64?img={{ $i }}"
            class="size-10 rounded-full md:size-12"
            alt=""
        />
        <span class="font-medium md:text-lg">
            {{ $comment->author->name }}
        </span>
    </div>
    <div>{{ $comment->body }}</div>
</div>
