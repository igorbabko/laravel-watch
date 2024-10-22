@php
    $links = [
        'youtube' => 'https://youtube.com',
        'telegram' => 'https://telegram.org',
        'github' => 'https://github.com',
        'x' => 'https://x.com'
    ];
@endphp

<ul class="flex gap-4">
    @foreach ($links as $name => $href)
        <li>
            <a href="{{ $href }}" target="_blank">
                <x-icon :$name/>
            </a>
        </li>
    @endforeach
</ul>
