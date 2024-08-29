<a
    {{ $attributes->merge(["href" => route("index"), "class" => "flex items-center gap-2 text-3xl fill-gray-200 font-bold *:size-10"]) }}
>
    <x-icon name="circle-play-2" />
    {{ $slot }}
</a>
