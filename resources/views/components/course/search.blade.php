<form action="{{ route('courses.index') }}">
    <div class="flex gap-2">
        <div class="flex-grow">
            <input type="search"
                   name="search"
                   placeholder="Course title or description"
                   value="{{ request('search') }}"
                   class="w-full rounded-md border-gray-300 focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50">
        </div>
        <button class="rounded-md px-4 bg-violet-500 hover:bg-violet-600">
            <x-icon name="magnifying-glass" class="size-6 fill-white"/>
        </button>
    </div>
</form>
