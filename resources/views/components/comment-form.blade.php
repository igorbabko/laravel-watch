@props([
    "isReply" => false,
])

<x-form :attributes="$attributes">
    <x-form-field>
        <x-label for="{{ $isReply ? 'reply' : 'comment' }}">
            Write your comment here
        </x-label>
        <x-textarea id="{{ $isReply ? 'reply' : 'comment' }}" rows="5" />
    </x-form-field>
    <x-button class="ml-auto">Reply</x-button>
</x-form>
