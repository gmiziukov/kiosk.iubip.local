<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <title>{{ config('app.name', 'Южный Университет (ИУБиП)') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body style="background-image: url({{ asset('storage/background.png') }})">
    <div class="content">
        <header class="w-full h-24 flex flex-row shadow-md px-4 py-2">
            <!-- Логотип -->
            <div class="w-1/4 h-full flex space-x-4 items-center">
                <img src="{{ asset('storage/logo_iubip.png') }}" class="w-24 h-16">
                <img src="{{ asset('storage/logo_ci.svg') }}" class="w-44">
            </div>
            <!-- Заголовок -->
            <div class="w-2/4 h-full flex flex-col items-center justify-center">
                <h1 class="text-white text-base lg:text-3xl font-semibold">{{ config('app.name', 'Южный Университет (ИУБиП)') }}</h1>
                <p class="text-white">{{ $title }}</p>
            </div>

            <div class="w-1/4 h-full">
                <div class="current-datetime">
                    <span id="currentDate" class="text-end"></span>
                    <span id="currentTime" class="text-end"></span>
                </div>
        </header>

        <main class="grow p-4 overflow-y-auto scrollbar-thin scrollbar-thumb-[#059669] scrollbar-track-sky-800">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts

    <script>
        var dateTime = setInterval(function() {
            currentTime();
            currentDate();
        }, 1000);

        function currentTime() {
            var now = new Date();
            var hours = now.getHours().toString().padStart(2, '0'); // Форматируем часы
            var minutes = now.getMinutes().toString().padStart(2, '0'); // Форматируем минуты
            document.getElementById("currentTime").innerHTML = hours + ':' + minutes; // Выводим время
        }

        function currentDate() {
            var now = new Date();
            var day = now.getDate(); // Получаем день
            var month = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября",
                "Ноября", "Декабря"
            ][now.getMonth()]; // Массив месяцев

            document.getElementById("currentDate").innerHTML = day + ' ' + month; // Выводим дату
        }
    </script>
</body>

</html>