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
<script>
        var myVar = setInterval(function() {
    myTimer();
    }, 1000);

    function myTimer() {
    var d = new Date();
    document.getElementById("clock").innerHTML = d.toLocaleTimeString();
    }
</script>
<body>
    <div class="h-screen w-full flex flex-col">
        <div class="z-10 bg-white h-32 shadow-lg shadow-gray-100">
            <!--Нужна ли тень? -->
            @if ($logotip)
                <div class="flex">
                    <div class="  flex gap-7 pl-4 pt-2">
                        {{ $logotip }}
                    </div>
                    <div class = "text-center text-blue-600 ">
                        {{ $head }}
                    </div>
                    <div>
                        <p id="clock"></p>
                    </div>
                </div>
            @else
                <div>
                    {{ $head }}
                </div>
            @endif
        </div>
        <div class = "">
            {{ $slot }}
        </div>
    </div>
    
    @livewireScripts
</body>

</html>
