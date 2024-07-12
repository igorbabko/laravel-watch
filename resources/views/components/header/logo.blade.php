@props(["withName" => false])

<a
    href="{{ route("index") }}"
    {{ $attributes->merge(["class" => "flex items-center gap-2 text-3xl font-bold"]) }}
>
    @if ($withName)
        <x-icon-circle-play-2 class="size-10" />
        Watch
    @else
        <x-icon-circle-play-2 class="size-20" />
    @endif
</a>
