<x-stack :attributes="$attributes->merge(['column' => true, 'gap' => 'xs'])">
    {{-- <x-stack class="mb-2 mt-8 justify-between"> --}}
    {{-- <x-stack --}}
    {{-- centered --}}
    {{-- tag="a" --}}
    {{-- :href="route('courses.show', $lesson->course)" --}}
    {{-- class="text-lg font-bold hover:fill-purple-500 hover:text-purple-500 md:text-2xl" --}}
    {{-- > --}}
    {{-- <x-icon name="chevron-left" /> --}}
    {{-- {{ $lesson->course->title }} --}}
    {{-- </x-stack> --}}
    {{-- </x-stack> --}}
    <x-lessons.video />
    <x-lessons.buttons :$lesson />
</x-stack>