<x-layouts.guest>
    <x-section>
        <x-container class="md:py-20a flex flex-col gap-10 pb-10 pt-12 md:pb-0">
            <x-lesson-info :lesson="$lesson" />
            <x-comments :comments="$lesson->comments" />
        </x-container>
    </x-section>
</x-layouts.guest>
