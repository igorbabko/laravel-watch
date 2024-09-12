@props([
    "isReply" => false,
])

<x-form :$attributes>
    <x-field>
        <x-label for="{{ $isReply ? 'reply' : 'comment' }}">
            Write your comment here
        </x-label>
        <x-textarea id="{{ $isReply ? 'reply' : 'comment' }}" />
    </x-field>
    <x-button class="ml-auto">Reply</x-button>
</x-form>
