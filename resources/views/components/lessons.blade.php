<x-stack :attributes="$attributes->merge(['column' => true])">
    @foreach ($lessons as $lesson)
        <x-lesson :lesson="$lesson" />
    @endforeach
</x-stack>
