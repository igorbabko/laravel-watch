<div class="flex flex-col gap-4">
    <h2 class="text-xl font-bold md:mb-4 md:text-2xl">Comments</h2>
    <x-comment-form />
    <div class="flex flex-col gap-4">
        @foreach (range(1, 10) as $i)
            <x-comment :i="$i" />
        @endforeach
    </div>
</div>
