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
                @if ($routeName === 'logout')
                    <form method="POST" action="{{ route($routeName) }}">
                        @csrf
                        <button type="submit" class="cursor-pointer">
                            Logout
                        </button>
                    </form>
                @else
                    {{ $label }}
                @endif
            </x-nav.item>
        @endforeach
    </ul>
</nav>
