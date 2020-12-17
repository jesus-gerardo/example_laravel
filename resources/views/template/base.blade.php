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
        <div class="container mx-auto">
            @yield('body')
        </div>
    </body>
</html>