@props(["withName" => false])

<a
    {{ $attributes->merge(["href" => route("index"), "class" => "flex items-center gap-2 text-3xl font-bold"]) }}
>
    @if ($withName)
        <x-icon-circle-play-2 class="size-10" />
        <span class="hidden sm:inline">Watch</span>
    @else
        <x-icon-circle-play-2 class="size-20" />
    @endif
</a>
