<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24 max-w-lg">
            <h1 class="text-center font-extrabold text-5xl">Delete Account</h1>
            <div class="bg-red-50 border border-red-200 rounded-md p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">
                            Warning: This action cannot be undone
                        </h3>
                        <div class="mt-2 text-sm text-red-700">
                            <p>Once you delete your account, all of your data will be permanently removed.</p>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('delete-account.destroy') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('DELETE')
                <div class="flex items-center gap-2 justify-between">
                    <a href="{{ route('profile') }}"
                       class="flex justify-center items-center gap-2 whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200">
                        Cancel
                    </a>
                    <button type="submit"
                            class="flex justify-center items-center gap-2 whitespace-nowrap cursor-pointer rounded-md font-semibold px-4 py-2 bg-red-600 text-white hover:bg-red-700"
                            onclick="return confirm('Are you absolutely sure you want to delete your account? This action cannot be undone.')">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
