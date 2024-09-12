<x-stack :attributes="$attributes->merge(['column' => true])">
    @foreach ($lessons as $lesson)
        <x-lessons.lesson :$lesson />
    @endforeach
</x-stack>
