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
            font-size: 33px;
            /* Размер шрифта */
            font-weight: bold;
            /* Жирный шрифт */

        }

        #date {
            background: -webkit-linear-gradient(#ffffff, #a09e9e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            /* Белый цвет */
            font-size: 30px;
            /* Размер шрифта */
            font-weight: bold;
            /* Жирный шрифт */

        }
    </style>
</head>

<body class="bg-cover" style="background-image: url({{ asset('img/colorkit16.png')}}); bg-cover;">

    <div class="h-screen w-full fixed flex flex-col">
        <div class="fixed z-10 h-26 w-full shadow-lg ">
            <div class="h-full flex flex-row">
                <div class="w-1/3 flex space-x-4 pl-4 pt-2">
                    <img class="w-32" src="{{ asset('storage/logo_iubip.png') }}">
                    <img class="w-48" src="https://www.centrinvest.ru/_ipx/_/logo.svg">
                </div>
                <div
                    class="w-1/3 flex items-center justify-center text-white text-center font-sans text-4xl leading-relaxed">
                    <span class=" bg-clip-text font-bold text-transparent bg-gradient-to-t to-white from-gray-400">
                        {{ $head }}
                    </span>
                </div>
                <div class="w-1/3 flex justify-end px-10">
                    <div class="flex flex-col items-center justify-center">
                        <p id="date"></p>
                        <p id="clock"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            @if(isset($backButton))
            {{$backButton}}
            @endif
            {{ $slot }}
        </div>
    </div>
    @livewireScripts
    <script>
        var myVar = setInterval(function() {
            myTimer();
            myDate();
        }, 1000);

        function myTimer() {
            var d = new Date();
            var hours = d.getHours().toString().padStart(2, '0'); // Форматируем часы
            var minutes = d.getMinutes().toString().padStart(2, '0'); // Форматируем минуты
            document.getElementById("clock").innerHTML = hours + ':' + minutes; // Выводим время
        }

        function myDate() {
            var d = new Date();
            var day = d.getDate(); // Получаем день
            var month = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября",
                "Ноября", "Декабря"
            ][d.getMonth()]; // Массив месяцев

            document.getElementById("date").innerHTML = day + ' ' + month; // Выводим дату
        }
    </script>
    @stack('modal')
</body>

</html>