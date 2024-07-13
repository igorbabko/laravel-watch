<a
    {{ $attributes->merge(["href" => route("index"), "class" => "flex items-center gap-2 text-3xl font-bold *:size-10"]) }}
>
    <x-icon-circle-play-2 />
    {{ $slot }}
</a>
