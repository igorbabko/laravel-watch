<div {{ $attributes->merge(["class" => "flex flex-col gap-2"]) }}>
    @foreach ($lessons as $lesson)
        <x-lesson :lesson="$lesson" />
    @endforeach
</div>
