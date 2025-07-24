@php
    $items = collect(config('watch.nav_items')())->reject(
        fn ($label, $routeName) => in_array($routeName, ['terms', 'privacy'])
    );
@endphp

<nav>
    <ul class="flex gap-8">
        @foreach ($items as $routeName => $label)
            <x-nav.item
                :href="route($routeName)"
                :is-active="request()->routeIs($routeName)">
                {{ $label }}
            </x-nav.item>
        @endforeach
    </ul>
</nav>
