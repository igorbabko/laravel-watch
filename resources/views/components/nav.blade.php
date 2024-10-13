@php
$items = [
    route('index') => 'Home',
    route('courses') => 'Courses',
    route('contact') => 'Contact',
    route('login') => 'Login',
    route('register') => 'Register',
];
@endphp

<nav>
    <ul class="flex gap-8">
        @foreach ($items as $href => $label)
            <x-nav-item :$href>{{ $label }}</x-nav-item>
        @endforeach
    </ul>
</nav>
