@props([
    "isReply" => false,
])

<form
    action="/"
    {{ $attributes->merge(["class" => "flex flex-col gap-2 md:mb-4 md:gap-3"]) }}
>
    <x-form-field>
        <x-label for="{{ $isReply ? 'reply' : 'comment' }}">
            Write your comment here
        </x-label>
        <x-textarea id="{{ $isReply ? 'reply' : 'comment' }}" rows="5" />
    </x-form-field>
    <x-button class="ml-auto">Reply</x-button>
</form>
