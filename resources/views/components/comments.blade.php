<div {{ $attributes->merge(["class" => "flex flex-col gap-4"]) }}>
    <h2 class="text-xl font-bold md:mb-4 md:text-2xl">Comments</h2>
    <x-comment-form class="mb-6" />
    <div class="flex flex-col gap-4">
        @foreach ($comments as $i => $comment)
            <x-comment :comment="$comment" :i="$i" />
            @foreach ($comment->replies as $j => $comment)
                <x-comment :comment="$comment" :i="$j" is-reply />
            @endforeach
        @endforeach
    </div>
</div>
