<!DOCTYPE html>
<html lang="en">
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
    <body
        class="flex min-h-screen flex-col items-center justify-center gap-8 bg-gray-100 p-8"
    >
        <header>
            <x-header.logo />
        </header>
        <main
            class="w-full max-w-screen-sm rounded-lg bg-white px-8 py-6 shadow md:w-2/3 lg:w-1/2"
        >
            {{ $slot }}
        </main>
    </body>
</html>
