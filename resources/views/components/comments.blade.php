<div class="flex flex-col gap-4">
    <h2 class="mb-4 text-3xl font-bold">Comments</h2>
    <x-comment-form />
    <div class="flex flex-col gap-3">
        @foreach (range(1, 10) as $i)
            <x-comment :i="$i" />
        @endforeach
    </div>
</div>
