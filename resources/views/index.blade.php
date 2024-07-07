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
        <main>
            <section class="relative overflow-hidden">
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
                <svg id="svg" viewBox="0 0 1440 590" xmlns="http://www.w3.org/2000/svg" class="absolute -bottom-20 -z-10"><defs><linearGradient id="gradient" x1="0%" y1="56%" x2="100%" y2="44%"><stop offset="5%" stop-color="#9900ef"></stop><stop offset="95%" stop-color="#f78da7"></stop></linearGradient></defs><path d="M 0,600 L 0,112 C 69.498454139471,102.24733768464445 138.996908278942,92.4946753692889 215,108 C 291.003091721058,123.5053246307111 373.5108210237031,164.26863620748884 445,207 C 516.4891789762969,249.73136379251116 576.9598076262454,294.4307798007558 632,315 C 687.0401923737546,335.5692201992442 736.6499484713155,332.00824458948813 814,337 C 891.3500515286845,341.99175541051187 996.4403984884918,355.53624184129166 1066,383 C 1135.5596015115082,410.46375815870834 1169.5884575747166,451.8467880453452 1226,484 C 1282.4115424252834,516.1532119546548 1361.2057712126416,539.0766059773274 1440,562 L 1440,600 L 0,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.4" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><defs><linearGradient id="gradient" x1="0%" y1="56%" x2="100%" y2="44%"><stop offset="5%" stop-color="#9900ef"></stop><stop offset="95%" stop-color="#f78da7"></stop></linearGradient></defs><path d="M 0,600 L 0,262 C 64.2329096530402,269.5060116798351 128.4658193060804,277.01202335967025 194,303 C 259.5341806939196,328.98797664032975 326.3696324287186,373.4579182411542 397,375 C 467.6303675712814,376.5420817588458 542.055650979045,335.1563036757128 610,368 C 677.944349020955,400.8436963242872 739.4077636551013,507.91686705599454 807,543 C 874.5922363448987,578.0831329440055 948.3132944005495,541.1762281003091 1023,539 C 1097.6867055994505,536.8237718996909 1173.3390587427002,569.3782205427689 1243,604 C 1312.6609412572998,638.6217794572311 1376.33047062865,675.3108897286156 1440,712 L 1440,600 L 0,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-1"></path><defs><linearGradient id="gradient" x1="0%" y1="56%" x2="100%" y2="44%"><stop offset="5%" stop-color="#9900ef"></stop><stop offset="95%" stop-color="#f78da7"></stop></linearGradient></defs><path d="M 0,600 L 0,412 C 68.11473720371006,379.13637925111647 136.22947440742013,346.27275850223293 210,357 C 283.7705255925799,367.72724149776707 363.1968395740296,422.04534524218485 438,457 C 512.8031604259704,491.95465475781515 582.9831672964617,507.5458605290278 641,537 C 699.0168327035383,566.4541394709722 744.8704912401234,609.7712126417039 808,640 C 871.1295087598766,670.2287873582961 951.5348677430436,687.3692889041567 1026,724 C 1100.4651322569564,760.6307110958433 1168.9900377877018,816.7516317416695 1237,843 C 1305.0099622122982,869.2483682583305 1372.504981106149,865.6241841291653 1440,862 L 1440,600 L 0,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-2"></path></svg>
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
        <footer class="pt-20 pb-6 px-2">
            <div class="container mx-auto flex gap-4 flex-col justify-between">
                <div class="flex justify-between items-center w-full">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-3xl font-bold">Join the newsletter</h3>
                        <form action="/" class="flex gap-2">
                            <input class="border-2 p-2 rounded" type="email" placeholder="Your email">
                            <button class="bg-purple-500 p-2 text-white rounded px-4">Join</button>
                        </form>
                    </div>
                    <ul class="flex gap-6">
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
                <hr class="border-px mt-4">
                <div class="flex justify-between items-center">
                    <p class="text-gray-500">&copy; 2024 All rights reserved.</p>
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
            </div>
        </footer>
    </body>
</html>
