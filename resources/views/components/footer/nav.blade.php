@php
    $items = collect(config('watch.nav_items'))->reject(
        fn ($label, $routeName) => in_array($routeName, ['login', 'register', 'profile'])
    );
@endphp

<ul class="flex gap-4">
    @foreach ($items as $routeName => $label)
        <x-footer.nav-item :href="route($routeName)">{{ $label }}</x-footer.nav-item>
    @endforeach
</ul>
