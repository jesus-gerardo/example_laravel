<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- https://www.itsolutionstuff.com/post/laravel-8-install-bootstrap-example-tutorialexample.html --}}
        {{-- https://www.tailwindtoolbox.com/ --}}
        {{-- https://tailwindcss.com/docs --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <style>
        html{
            /* https://developer.mozilla.org/es/docs/Web/CSS/scroll-behavior */
            scroll-behavior: smooth;
        }

        /* https://developer.mozilla.org/es/docs/Web/CSS/transition */
        /* .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        } */
        /* .carousel-item {
            -webkit-transition: opacity 1s ease-out;
            transition: opacity 1s ease;
        } */

        /* #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        } */

        /* .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        } */

        /* #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #2b6cb0; 
        } */
    </style>

    <body>
        <nav class="w-full h-auto bg-gray-800">
            <div class="flex flex-wrap">
                <div class="w-3/4 md:w-2/4">
                    <h1 class="p-5 text-white lg:text-2xl">Laravel tailwindcss</h1>
                </div>
        
                <div class="w-3/4 md:w-2/4">
                    <div class="flex lg:flex-wrap space-x-1">
                        <a href="#inicio" class="text-white hover:bg-gray-700 focus:bg-gray-900 px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                        <a href="#informacion" class="text-white hover:bg-gray-700 focus:bg-gray-900 px-3 py-2 rounded-md text-sm font-medium">Imagenes</a>
                        <a href="#contacto" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contacto</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    </div>
        
                </div>
            </div>
        </nav>

        <main class="block p-4">
            <div class="w-full">
                @yield('body')
            </div>
        </main>

        <footer class="w-full bg-gray-800 text-white text-center mt-5">
            <div class="w-full block justify-items-center">
                <div class="w-full">
                    <h5 class="font-serif text-2xl">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum aut eius dolor quas incidunt ipsam tenetur, quo mollitia in nulla, soluta iure provident ut nisi possimus! Earum ut et praesentium.
                    </h5>
                </div>
                <div class="w-full">
                    <p class="">Redes sociales</p>
                </div>
            </div>
        </footer>
    </body>
</html>