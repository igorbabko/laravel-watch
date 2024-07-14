<div class="flex items-center gap-2">
    <x-button-secondary class="bg-gray-200 hover:bg-gray-300">
        <x-icon name="heart" class="size-4" />
        3
    </x-button-secondary>
    @if (! $isReply)
        <x-button-secondary class="bg-gray-200 hover:bg-gray-300">
            <x-icon name="comment" class="size-4" />
            2
        </x-button-secondary>
        <x-button-secondary class="ml-auto bg-gray-200 hover:bg-gray-300">
            Reply
        </x-button-secondary>
    @endif
</div>
