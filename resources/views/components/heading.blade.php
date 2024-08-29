@props(["type" => "page"])

<div {{ $attributes->merge(["class" => "flex flex-col gap-4 sm:gap-6"]) }}>
    @if ($type === "page")
        <h1 class="mt-8 text-center text-4xl font-bold sm:text-5xl md:text-7xl">
            {{ $slot }}
        </h1>
    @else
        <h2 class="text-center text-3xl font-bold sm:text-4xl md:text-5xl">
            {{ $slot }}
        </h2>
    @endif
    <hr
        class="mx-auto w-10 rounded-lg border-2 border-purple-500 sm:w-12 md:mb-8 md:w-20 md:border-4"
    />
</div>
