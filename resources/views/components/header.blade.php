@php
    $navItems = $navItems->reject(
        fn ($label, $routeName) => in_array($routeName, ['terms', 'privacy'])
    );
@endphp

<header class="fixed inset-x-0 bg-white border-b">
    <div class="container flex items-center justify-between p-4">
        <x-logo/>
        <x-nav :items="$navItems"/>
    </div>
</header>
