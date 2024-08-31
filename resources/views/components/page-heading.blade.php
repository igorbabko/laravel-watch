<div {{ $attributes->merge(["class" => "flex flex-col gap-4 sm:gap-6"]) }}>
    <h1 class="mt-8 text-center text-4xl font-bold sm:text-5xl md:text-6xl">
        {{ $slot }}
    </h1>
    <hr
        class="mx-auto w-10 rounded-lg border-2 border-purple-500 sm:w-12 md:mb-8 md:w-20 md:border-4"
    />
</div>
