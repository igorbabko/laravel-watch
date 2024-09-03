<x-stack column gap="sm" :attributes="$attributes">
    @foreach ($lessons as $lesson)
        <x-lesson :lesson="$lesson" />
    @endforeach
</x-stack>
