<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ll</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class = "h-16 w-screan bg-sky-500">
            @if ($logotip)
                <div class="flex">
                    <div class="flex gap-7 pl-2">
                        {{$logotip}}
                    </div>
                    <div class = "text-center w-full text-5xl"> 
                        {{$head}}
                    </div>
                </div>
            @else
                <div>
                    {{$head}}
                </div>
            @endif
       </div>
        <div class = "">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>