<li class="text-center md:text-left">
    <x-text
        :attributes="$attributes->merge([
            'class' => 'text-white hover:text-purple-200',
            'weight' => 'medium',
            'tag' => 'a',
        ])"
    >
        {{ $slot }}
    </x-text>
</li>
