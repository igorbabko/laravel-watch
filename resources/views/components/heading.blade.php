@props(['type' => 'page'])

@if ($type === 'page')
    <h2 class="text-7xl my-8 font-black">{{ $slot }}</h2>
@else
    <h2 class="text-5xl font-black">{{ $slot }}</h2>
    <hr class="border-4 border-pink-500 mb-8 w-20 rounded-lg">
@endif
