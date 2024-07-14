<li class="text-center md:text-left">
    <a
        {{ $attributes->merge(["class" => "text-lg font-medium text-white hover:text-purple-100"]) }}
    >
        {{ $slot }}
    </a>
</li>
