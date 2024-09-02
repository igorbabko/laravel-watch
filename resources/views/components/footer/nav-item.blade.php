<li class="text-center md:text-left">
    <a
        {{ $attributes->merge(["class" => "font-medium text-white hover:text-purple-200"]) }}
    >
        {{ $slot }}
    </a>
</li>
