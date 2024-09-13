<nav>
    <x-stack
        :attributes="$attributes->merge(['class' => 'justify-end', 'tag' => 'ul', 'gap' => 'xl'])"
    >
        @foreach ($items as $routeName => $label)
            <x-nav.item
                :href="route($routeName)"
                :is-active="request()->route()->named($routeName)"
            >
                {{ $label }}
            </x-nav.item>
        @endforeach
    </x-stack>
</nav>
