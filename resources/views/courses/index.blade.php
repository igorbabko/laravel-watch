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
    <body>
        <header class="absolute w-full px-2 z-10">
            <nav class="container mx-auto flex justify-between items-center py-4">
                <div class="w-1/3">
                    <a href="/" class="text-3xl font-semibold flex items-center gap-1">
                        {{--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">--}}
                        {{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />--}}
                        {{--                        </svg>--}}

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z"/>
                        </svg>
                        Watch
                    </a>
                </div>
                <ul class="flex gap-6">
                    <li>
                        <a href="#" class="font-semibold hover:text-purple-800 text-xl">Home</a>
                    </li>
                    <li>
                        <a href="#" class="font-semibold hover:text-purple-800 text-xl">Courses</a>
                    </li>
                    <li>
                        <a href="#" class="font-semibold hover:text-purple-800 text-xl">About</a>
                    </li>
                    {{--                        <li>--}}
                    {{--                            <a href="/" class="bg-purple-100 hover:bg-white font-medium text-purple-600 p-2 rounded">Register</a>--}}
                    {{--                        </li>--}}
                </ul>
                <div class="w-1/3 text-right">
                    <a href="#" class="font-semibold hover:text-purple-800 text-xl">Login &rarr;</a>
                </div>
            </nav>
        </header>
        <main class="overflow-x-hidden">
            <section class="relative">
                <svg class="absolute w-2/3 -top-1/2 -right-40 rotate-90 opacity-10 -z-10"
                     xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800">
                    <defs>
                        <filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%"
                                filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB">
                            <feGaussianBlur stdDeviation="40" x="0%" y="0%" width="100%" height="100%"
                                            in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur>
                        </filter>
                    </defs>
                    <g filter="url(#bbblurry-filter)">
                        <ellipse rx="150" ry="150" cx="343.9612174308737" cy="555.6379509571335"
                                 fill="hsl(37, 99%, 67%)"></ellipse>
                        <ellipse rx="150" ry="150" cx="561.017023695701" cy="355.94959135205335"
                                 fill="hsl(316, 73%, 52%)"></ellipse>
                        <ellipse rx="150" ry="150" cx="264.4129982993241" cy="265.81445975578265"
                                 fill="hsl(185, 100%, 57%)"></ellipse>
                    </g>
                </svg>

                <svg class="absolute w-2/3 -bottom-1/2 -left-40 opacity-10 -z-10" xmlns="http://www.w3.org/2000/svg"
                     version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"
                     viewBox="0 0 800 800">
                    <defs>
                        <filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%"
                                filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB">
                            <feGaussianBlur stdDeviation="40" x="0%" y="0%" width="100%" height="100%"
                                            in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur>
                        </filter>
                    </defs>
                    <g filter="url(#bbblurry-filter)">
                        <ellipse rx="150" ry="150" cx="343.9612174308737" cy="555.6379509571335"
                                 fill="hsl(37, 99%, 67%)"></ellipse>
                        <ellipse rx="150" ry="150" cx="561.017023695701" cy="355.94959135205335"
                                 fill="hsl(316, 73%, 52%)"></ellipse>
                        <ellipse rx="150" ry="150" cx="264.4129982993241" cy="265.81445975578265"
                                 fill="hsl(185, 100%, 57%)"></ellipse>
                    </g>
                </svg>

                <div class="container mx-auto h-screen flex justify-center items-center flex-col gap-6">
                    <h1 class="text-7xl font-black text-center">Learn Web Development</h1>
                    <div class="flex gap-3">
                        <a href="/"
                           class="bg-purple-600 hover:bg-purple-700 text-white text-2xl p-4 rounded-lg font-semibold">Register</a>
                        <a href="/"
                           class="bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-black text-2xl p-4 rounded-lg font-semibold">Explore
                            Courses</a>
                    </div>
                </div>
            </section>
            <section class="px-2">
                <div class="container py-20 mx-auto flex flex-col items-center gap-6">
                    <h2 class="text-5xl font-black">Latest Courses</h2>
                    <hr class="border-4 border-pink-500 my-4 w-20 rounded-lg">
                    <div class="flex gap-4">
                        <article class="bg-gray-100 rounded-lg flex-grow overflow-hidden">
                            <img src="/img/full.jpg" alt="" class="mb-4 w-full">
                            <header class="mx-4">
                                <h3>
                                    <a href="/" class="text-2xl font-semibold">Laravel for beginners</a>
                                </h3>
                            </header>
                            <div class="mt-2 mb-4 mx-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                                deserunt doloremque dolores ducimus enim expedita id quidem sit unde vitae.
                            </div>
                            <footer class="font-semibold flex justify-between mx-4 pb-6">
                                <span>25 lessons</span>
                                <span class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                    2 hr 30 mins
                                </span>
                            </footer>
                        </article>
                        <article class="bg-gray-100 rounded-lg flex-grow overflow-hidden">
                            <img src="/img/full.jpg" alt="" class="mb-4 w-full">
                            <header class="mx-4">
                                <h3>
                                    <a href="/" class="text-2xl font-semibold">Laravel for beginners</a>
                                </h3>
                            </header>
                            <div class="mt-2 mb-4 mx-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                                deserunt doloremque dolores ducimus enim expedita id quidem sit unde vitae.
                            </div>
                            <footer class="font-semibold flex justify-between mx-4 pb-6">
                                <span>25 lessons</span>
                                <span class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                    2 hr 30 mins
                                </span>
                            </footer>
                        </article>
                        <article class="bg-gray-100 rounded-lg flex-grow overflow-hidden">
                            <img src="/img/full.jpg" alt="" class="mb-4 w-full">
                            <header class="mx-4">
                                <h3>
                                    <a href="/" class="text-2xl font-semibold">Laravel for beginners</a>
                                </h3>
                            </header>
                            <div class="mt-2 mb-4 mx-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                                deserunt doloremque dolores ducimus enim expedita id quidem sit unde vitae.
                            </div>
                            <footer class="font-semibold flex justify-between mx-4 pb-6">
                                <span>25 lessons</span>
                                <span class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                    2 hr 30 mins
                                </span>
                            </footer>
                        </article>
                    </div>
                </div>
            </section>
            <section class="px-2">
                <div class="container py-20 mx-auto flex flex-col items-center gap-6">
                    <h2 class="text-5xl font-black">Popular Courses</h2>
                    <hr class="border-4 border-pink-500 my-4 w-20 rounded-lg">
                    <div class="flex gap-4">
                        <article class="bg-gray-100 rounded-lg flex-grow overflow-hidden">
                            <img src="/img/full.jpg" alt="" class="mb-4 w-full">
                            <header class="mx-4">
                                <h3>
                                    <a href="/" class="text-2xl font-semibold">Laravel for beginners</a>
                                </h3>
                            </header>
                            <div class="mt-2 mb-4 mx-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                                deserunt doloremque dolores ducimus enim expedita id quidem sit unde vitae.
                            </div>
                            <footer class="font-semibold flex justify-between mx-4 pb-6">
                                <span>25 lessons</span>
                                <span class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                    2 hr 30 mins
                                </span>
                            </footer>
                        </article>
                        <article class="bg-gray-100 rounded-lg flex-grow overflow-hidden">
                            <img src="/img/full.jpg" alt="" class="mb-4 w-full">
                            <header class="mx-4">
                                <h3>
                                    <a href="/" class="text-2xl font-semibold">Laravel for beginners</a>
                                </h3>
                            </header>
                            <div class="mt-2 mb-4 mx-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                                deserunt doloremque dolores ducimus enim expedita id quidem sit unde vitae.
                            </div>
                            <footer class="font-semibold flex justify-between mx-4 pb-6">
                                <span>25 lessons</span>
                                <span class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                    2 hr 30 mins
                                </span>
                            </footer>
                        </article>
                        <article class="bg-gray-100 rounded-lg flex-grow overflow-hidden">
                            <img src="/img/full.jpg" alt="" class="mb-4 w-full">
                            <header class="mx-4">
                                <h3>
                                    <a href="/" class="text-2xl font-semibold">Laravel for beginners</a>
                                </h3>
                            </header>
                            <div class="mt-2 mb-4 mx-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                                deserunt doloremque dolores ducimus enim expedita id quidem sit unde vitae.
                            </div>
                            <footer class="font-semibold flex justify-between mx-4 pb-6">
                                <span>25 lessons</span>
                                <span class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                    2 hr 30 mins
                                </span>
                            </footer>
                        </article>
                    </div>
                </div>
            </section>
        </main>
        <footer class="pt-20 pb-12 px-2 relative">
            <div class="container mx-auto flex gap-2 flex-col justify-between">
                <div class="flex justify-between">
                    <div class="flex justify-center gap-8">
                        <h3 class="text-3xl font-bold">Join the newsletter</h3>
                        <form action="/" class="flex gap-2">
                            <input class="border-2 p-2 rounded" type="email" placeholder="Your email">
                            <button class="bg-purple-500 p-2 text-white rounded px-4">Join</button>
                        </form>
                    </div>
                    <ul class="flex gap-3">
                        <li>
                            <a href="/"
                               class="p-2 border-2 border-purple-600 hover:border-pink-600 rounded-full flex group">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                     class="size-6 fill-purple-600 group-hover:fill-pink-600">
                                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="/"
                               class="p-2 border-2 border-purple-600 hover:border-pink-600 rounded-full flex group">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                     class="size-6 fill-purple-600 group-hover:fill-pink-600">
                                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="/"
                               class="p-2 border-2 border-purple-600 hover:border-black rounded-full flex group">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                     class="size-6 fill-purple-600 group-hover:fill-black">
                                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <hr class="border-px my-8">
                <div class="flex justify-between">
                    <p class="text-gray-500 text-center text-lg">&copy; 2024 All rights reserved.</p>
                    <ul class="flex gap-6">
                        <li>
                            <a href="/" class="text-gray-600 hover:text-purple-600 text-lg font-medium">Home</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 hover:text-purple-600 text-lg font-medium">Courses</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 hover:text-purple-600 text-lg font-medium">About</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 hover:text-purple-600 text-lg font-medium">Privacy</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 hover:text-purple-600 text-lg">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
