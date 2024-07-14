@php
    $items = [
        "index" => "<x-icon-youtube class=\"size-9 fill-white hover:fill-purple-200\"/>",
        "courses.index" => "<x-icon-youtube class=\"size-9 fill-white hover:fill-purple-200\"/>",
        "contact" => "<x-icon-telegram class=\"size-9 fill-white hover:fill-purple-200\"/>",
        "contact" => "<x-icon-x class=\"size-9 fill-white hover:fill-purple-200\"/>",
    ];
@endphp

<ul class="flex gap-4">
    @foreach ($items as $routeName => $a)
        <li>
            <a href="{{ route($routeName) }}">
                {!! $a !!}
            </a>
        </li>
    @endforeach
</ul>
