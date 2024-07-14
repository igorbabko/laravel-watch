@props([
    "isReply" => false,
    "i",
])

@php
    $classes = "flex flex-col gap-4 bg-gray-100 p-4";

    if ($isReply) {
        $classes .= " ml-8 md:ml-12";
    }
@endphp

<x-card class="{{ $classes }}">
    <div class="relative">
        <span class="absolute right-0 top-0 self-start text-sm">
            9 months ago
        </span>
        <x-media :i="$i" />
    </div>
    <x-comment-buttons :is-reply="$isReply" />
</x-card>

@if (! $isReply && $i === 2)
    <x-comment-form class="ml-8 md:ml-12" is-reply />
@endif
