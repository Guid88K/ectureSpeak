<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
    <div id="app">
        <header class="bg-gray-900 text-white body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

                <nav class=" flex flex-wrap items-center text-base">
                    <a class="mr-5 hover:text-gray-600">Second Link</a>
                    <a class="mr-5 hover:text-gray-600">Third Link</a>
                    <a class="mr-5 hover:text-gray-600">Fourth Link</a>
                </nav>

                <a
                    class=" md:ml-auto md:mr-auto sflex title-font font-medium items-center text-v mb-4 md:mb-0 justify-center">
                    <span class="ml-3 text-xl">Tailblocks</span>
                </a>


                <nav class="inline-flex flex-wrap items-center text-base">
                    <a class="mr-5 hover:text-gray-600">Second Link</a>
                    <a class="mr-5 hover:text-gray-600">Third Link</a>
                    <a class="mr-5 hover:text-gray-600">Fourth Link</a>
                </nav>
            </div>
        </header>

        <section>
            
            <div class="bg-hero-pattern h-screen">
               
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
                        <br class="hidden lg:inline-block">readymade gluten
                    </h1>
                    <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air
                        plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot
                        chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
                    <div class="flex justify-center">
                        <button
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        <button
                            class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
                </div>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
</body>