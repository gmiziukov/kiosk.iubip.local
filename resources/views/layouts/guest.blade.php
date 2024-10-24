<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Южный Университет (ИУБиП)') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="w-full h-screen flex flex-col bg-cover font-sans text-gray-600 antialiased overflow-hidden" style="background-image: url({{ asset('storage/background.png') }})">
        <header class="w-full h-24 flex flex-row shadow-md px-4 py-2">
            <!-- Логотип -->
            <div class="w-1/3 h-full flex space-x-4">
                <img src="{{ asset('storage/logo_iubip.png') }}" class="w-28 h-20">
                <img src="{{ asset('storage/logo_ci.svg') }}" class="w-44">
            </div>
            <!-- Заголовок -->
            <div class="w-1/3 h-full flex items-center justify-center">
                <h1 class="text-white text-4xl font-semibold">{{ $title }}</h1>
            </div>

            <div class="w-1/3 h-full flex justify-end flex ">
                <div x-data="{ showElement: false }" x-init="setTimeout(() => { showElement = true; }, 1000)">
                    <div x-show="showElement" class="h-full flex items-center justify-end flex-row my-element">

                        <div class=" flex p-4 w-[14.8rem]">
                            <div id="ww_cd2f2b7ad414e" loc='auto' a='{"t":"responsive","lang":"ru","ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#FFFFFF00","cl_font":"rgba(255,255,255,1)","cl_cloud":"rgba(195, 225, 232, 0.93)","cl_persp":"rgba(66, 209, 252, 0.89)","cl_sun":"rgba(255, 211, 51)","cl_moon":"#E6E6FA","cl_thund":"rgba(242, 130, 2, 0.89)","el_nme":3,"el_wfc":3,"cl_odd":"#00000000","sl_tof":"1"}'>Установить <a href="https://weatherwidget.org/ru/" id="ww_cd2f2b7ad414e_u" target="_blank">HTML погодный информер для сайта</a></div>
                            <script class="hidden" async src="https://app3.weatherwidget.org/js/?id=ww_cd2f2b7ad414e"></script>
                        </div>

                        <div class="flex flex-col w-[13rem] space-y-1 items-center justify-center">
                            <span id="currentDate" class="text-white text-3xl font-semibold"></span>
                            <span id="currentTime" class="text-white text-3xl font-semibold"></span>
                        </div>
                    </div>
                </div>
        </header>

        <main class="p-6 grow overflow-y-auto scrollbar-thin scrollbar-thumb-[#059669] scrollbar-track-sky-800">
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