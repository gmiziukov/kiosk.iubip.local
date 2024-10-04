<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ll</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <style>
        #clock {
            background: -webkit-linear-gradient(#ffffff, #a09e9e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            /* Белый цвет */
            font-size: 36px;
            /* Размер шрифта */
            font-weight: bold;
            /* Жирный шрифт */
            position: fixed;
            /* Фиксированное позиционирование */
            top: 15px;
            /* Отступ сверху */
            right: 30px
        }
    </style>
</head>
<div id="clock"></div>


<script>
    var myVar = setInterval(function() {
        myTimer();
    }, 1000);

    function myTimer() {
        var d = new Date();
        var hours = d.getHours().toString().padStart(2, '0'); // Форматируем часы
        var minutes = d.getMinutes().toString().padStart(2, '0'); // Форматируем минуты
        document.getElementById("clock").innerHTML = hours + ':' + minutes; // Выводим время
    }
</script>

<body style="background-image: url({{ asset('img/colorkit7.png') }})">

    <div class="h-screen w-full flex flex-col">
        <div class=" h-32 shadow-lg ">
            <!--Нужна ли тень? -->
            @if ($logotip)
                <div class="flex">
                    <div class="  flex gap-4 pl-4 pt-2">
                        {{ $logotip }}
                    </div>
                    <div class = "text-center text-white">
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
