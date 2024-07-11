@props(["type" => "page"])

@if ($type === "page")
    <h2 class="mt-8 text-7xl font-black">{{ $slot }}</h2>
@else
    <h2 class="text-5xl font-black">{{ $slot }}</h2>
@endif
<hr class="mb-8 w-20 rounded-lg border-4 border-purple-500" />
