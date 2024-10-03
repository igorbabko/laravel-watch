<nav>
    <ul class="flex gap-8">
        @foreach ($items as $routeName => $label)
            <x-nav.item :href="route($routeName)">{{ $label }}</x-nav.item>
        @endforeach
    </ul>
</nav>
