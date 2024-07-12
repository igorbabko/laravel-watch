@props(["withName" => false])

<a
    href="{{ route("index") }}"
    class="flex items-center gap-1 rounded-full text-3xl font-bold"
>
    <x-icon-circle-play class="size-16" />
    {{ $withName ? "Watch" : "" }}
</a>
