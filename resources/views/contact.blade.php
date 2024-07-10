<x-layout>
    <x-section>
        <div class="container py-20 mx-auto flex flex-col items-center gap-6">
            <x-heading>Contact Us</x-heading>
            <form action="/" class="flex flex-col w-full gap-6 max-w-xl">
                <div class="flex flex-col gap-1">
                    <label for="name" class="font-medium text-xl">Name</label>
                    <input id="name" class="border-2 py-2 px-4 flex-grow rounded-lg" type="text">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email" class="font-medium text-xl">Email</label>
                    <input id="email" class="border-2 py-2 px-4 flex-grow rounded-lg" type="text">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="message" class="font-medium text-xl">Message</label>
                    <textarea id="message" class="border-2 py-2 px-4 flex-grow rounded-lg" cols="30"
                              rows="10"></textarea>
                </div>
                <button class="bg-purple-500 py-3 px-4 rounded-lg ml-auto flex gap-2 text-white font-semibold hover:bg-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6 fill-white">
                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/>
                    </svg>
                    Send
                </button>
            </form>
        </div>
    </x-section>
</x-layout>
