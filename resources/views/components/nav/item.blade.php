@php
    $attributes = $attributes
        ->class(['text-violet-600' => $isActive])
        ->merge(['class' => 'text-xl font-semibold hover:text-violet-600']);
@endphp

<li>
    <a {{ $attributes }}>{{ $slot }}</a>
</li>
