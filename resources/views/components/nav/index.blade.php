@php
    $items = collect(config('watch.nav_items'))->reject(
        function ($label, $routeName) {
            $rejectedRouteNames = ['terms', 'privacy'];

            if (auth()->check()) {
                $rejectedRouteNames[] = 'register';
                $rejectedRouteNames[] = 'login';
            } else {
                $rejectedRouteNames[] = 'profile';
            }

            return in_array($routeName, $rejectedRouteNames);
        }
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
