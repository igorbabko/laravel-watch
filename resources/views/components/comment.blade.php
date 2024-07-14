@props([
    "i",
])

<x-card class="flex flex-col gap-4 bg-gray-100 p-4">
    <div class="relative">
        <span class="absolute right-0 top-0 self-start text-sm">
            9 months ago
        </span>
        <x-media :i="$i" />
    </div>
    <x-comment-buttons />
</x-card>
