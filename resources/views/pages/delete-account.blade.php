<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Delete Account</h1>
            <div class="flex gap-3 bg-red-50 border border-red-200 rounded-md p-4">
                <div class="flex-shrink-0">
                    <x-icon name="exclamation-triangle" class="size-6 text-red-800" />
                </div>
                <div>
                    <h2 class="text-sm font-medium text-red-800">
                        Warning: This action cannot be undone
                    </h2>
                    <p class="mt-2 text-sm text-red-700">Once you delete your account, all of your data will be permanently removed.</p>
                </div>
            </div>
            <form action="#" method="POST" class="flex flex-col gap-4">
                @csrf
                <div class="flex items-center gap-2 justify-between">
                    <a href="{{ route('profile') }}"
                       class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                       Cancel
                    </a>
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-red-600 text-white hover:bg-red-700">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
