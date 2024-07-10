<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Watch</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite('resources/js/app.js')
    </head>
    <body class="px-8 border-box">
        <x-header/>
        <main class="overflow-x-hidden">{{ $slot }}</main>
        <x-footer/>
    </body>
</html>
