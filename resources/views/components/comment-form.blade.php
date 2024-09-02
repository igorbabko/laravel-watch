@props([
    "isReply" => false,
])

<x-form :attributes="$attributes->merge(['class' => 'sm:gap-3'])">
    <x-form-field>
        <x-label for="{{ $isReply ? 'reply' : 'comment' }}">
            Write your comment here
        </x-label>
        <x-textarea id="{{ $isReply ? 'reply' : 'comment' }}" />
    </x-form-field>
    <x-button class="ml-auto">Reply</x-button>
</x-form>
