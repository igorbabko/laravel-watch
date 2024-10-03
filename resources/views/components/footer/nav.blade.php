@php
    $items = [
        route('index') => 'Home',
        route('courses') => 'Courses',
        route('contact') => 'Contact',
        route('login') => 'Login',
        route('register') => 'Register',
        route('terms') => 'Terms',
        route('privacy') => 'Privacy',
    ];
@endphp

<nav>
    <ul class="flex gap-4">
        @foreach ($items as $href => $label)
            <x-footer.nav-item :$href>{{ $label }}</x-footer.nav-item>
        @endforeach
    </ul>
</nav>
