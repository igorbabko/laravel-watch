<x-stack column gap="2" :attributes="$attributes">
    @foreach ($lessons as $lesson)
        <x-lesson :lesson="$lesson" />
    @endforeach
</x-stack>
