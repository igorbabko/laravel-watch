@props(['name', 'logo', 'courseCount', 'lessonCount'])

<div class="bg-gray-100 p-4 rounded-xl flex flex-col items-center gap-2">
    <div class="flex items-center gap-4">
        <img src="{{ $logo }}" alt="" class="size-12">
        <h3 class="text-4xl font-semibold">{{ $name }}</h3>
    </div>
    {{--                    <hr class="border border-gray-200 w-full my-2">--}}
    <div class="text-center">
        <p><span class="font-semibold">{{ $courseCount }}</span> courses</p>
        <p><span class="font-semibold">{{ $lessonCount }}</span> lessons</p>
    </div>
</div>