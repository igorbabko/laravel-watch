@props(["withName" => false])

<a
    href="{{ route("index") }}"
    class="flex items-center gap-2 rounded-full text-3xl font-bold"
>
    <x-icon-circle-play-2 class="size-10" />
    {{ $withName ? "Watch" : "" }}
</a>
