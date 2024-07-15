<x-layouts.guest>
    <x-section>
        <x-container class="flex flex-col gap-10 pb-10 pt-12 md:py-20">
            <x-lesson-info :lesson="$lesson" />
            <x-comments :comments="$lesson->comments" />
        </x-container>
    </x-section>
</x-layouts.guest>
