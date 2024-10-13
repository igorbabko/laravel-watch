@php
    $items = [
        route('index') => 'Home',
        route('courses') => 'Courses',
        route('contact') => 'Contact',
        route('terms') => 'Terms',
        route('privacy') => 'Privacy',
    ];
@endphp

<ul class="flex gap-4">
    @foreach ($items as $href => $label)
        <x-footer.nav-item :$href>{{ $label }}</x-footer.nav-item>
    @endforeach
</ul>
