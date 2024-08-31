<div {{ $attributes->merge(["class" => "flex flex-col gap-4 sm:gap-6"]) }}>
    <h2 class="text-center text-3xl font-bold sm:text-4xl md:text-5xl">
        {{ $slot }}
    </h2>
    <hr
        class="mx-auto w-10 rounded-md border-2 border-purple-500 sm:w-12 md:mb-8 md:w-20 md:border-4"
    />
</div>
