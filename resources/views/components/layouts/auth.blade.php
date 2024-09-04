<!DOCTYPE html>
<html lang="en" class="font-[inter]">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Watch</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <x-stack
        column
        centered
        gap="lg"
        class="min-h-screen justify-center p-4 sm:px-8 sm:py-6"
    >
        <header>
            <x-header.logo class="overflow-hidden rounded-full" size="lg" />
        </header>
        <main class="w-full max-w-96 md:w-2/3 xl:w-1/3">
            <x-card>{{ $slot }}</x-card>
        </main>
    </x-stack>
</html>
