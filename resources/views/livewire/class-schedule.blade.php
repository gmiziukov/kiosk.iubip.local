<div class="h-full w-full">
    <div class="flex justify-between">
        <button wire:click="redirectBack()" class="w-[11.7rem] h-[3.75rem] flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>
        <div class="flex justify-center items-center w-full">
            <input
                class="rounded-md pl-2 w-1/2 text-2xl h-16 border border-green-600 text-blue-500"
                placeholder="{{($SoT == 'Student') ? 'Пожалуйста, введите полное название группы' : 'Пожалуйста, укажите имя в формате Фамилия И.О.'}}" wire:model="group" type="text" value="">
            <button wire:click="search()" class="flex items-center justify-center px-4 text-xl font-medium border ml-8 border-green-400 h-16 bg-white rounded-md">
                <i class="fa-solid fa-search fa-xl"></i>
                <span class="ml-2">Найти</span>
            </button>
        </div>

        <button wire:click="redirectToHome()" class="w-[11.7rem] h-[3.75rem] flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>

    <div class="mt-4">
        <div class="flex justify-between flex-row p-2">
            <button class="flex items-center rounded border border-blue-200 p-2 text-white" wire:click="add_week()">
                <i class="fa-solid fa-chevron-left fa-xl"></i>
                <span class="ml-2">Предыдущая неделя</span>
            </button>
            <div class="text-white text-2xl">
                {{\Carbon\Carbon::parse($weekStartDate)->format('d') }} {{ ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'][\Carbon\Carbon::parse($weekStartDate)->month - 1]  }}
                -
                {{\Carbon\Carbon::parse($weekendDate)->format('d') }} {{ ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'][\Carbon\Carbon::parse($weekendDate)->month - 1]  }}
            </div>
            <button class="flex items-center rounded border border-blue-200 p-2 text-white" wire:click="back_week()">
                <span class="mr-2">Следующая неделя</span>
                <i class="fa-solid fa-chevron-right fa-xl"></i>
            </button>
        </div>
        <table class="border-separate border-spacing-1 rounded-lg font-sans font-normal text-xl text-white">

            <thead class="bg-gradient-to-br  text-center font-bold from-blue-700 h-16 w-96 from-60% to-blue-900">
                <tr>
                    <td class="border rounded-l-lg border-blue-200">
                        Время
                    </td>
                    <td class="border border-blue-200">
                        Понедельник
                    </td>
                    <td class="border border-blue-200">
                        Вторник
                    </td>
                    <td class="border border-blue-200">
                        Среда
                    </td>
                    <td class="border border-blue-200">
                        Четверг
                    </td>
                    <td class="border border-blue-200">
                        Пятница
                    </td>
                    <td class="border rounded-r-lg border-blue-200">
                        Суббота
                    </td>
                </tr>
            </thead>

            <tbody class="bg-gradient-to-br h-14 from-blue-600 from-60%  to-blue-900">
                @if ($SoT == "Student")

                @foreach($time_var as $time)
                <tr>
                    <td class="border w-48 text-center h-10 rounded-l-lg text-xl font-sans font-norm border-blue-200">
                        {{$time}}
                    </td>
                    @for ($i = 0; $i!=6;$i++)
                    <td class="border w-96 rounded-md text-xl font-sans font-norm border-blue-200">
                        <table>
                            @if($now)
                            {{-- {{dd($now)}} --}}
                            @foreach ($now as $now1)
                            {{-- {{dd($now1)}} --}}
                            @if( $now1->time == $time )
                            @if ($now1->date == Carbon\Carbon::parse($now_date1)->addDays($i)->format("Y-m-d"))
                            <tr>
                                <div class="text-center pt-2 font-bold px-2">
                                    <ul>
                                        {{$now1->discipline}}
                                    </ul>
                                </div>
                            </tr>

                            <tr>
                                <div class="flex pt-2 px-2">
                                    <i class="fa-solid fa-chalkboard-user indent-4 fa-location-pin">
                                        <span class="text-lg font-sans font-normal indent-8">
                                            {{$now1->teacher}}
                                        </span>
                                    </i>
                                </div>
                            </tr>

                            <tr>
                                <div class="flex items-center justify-between px-2 py-1">
                                    <div class="flex space-x-2 pt-2 items-center">
                                        <i class="fa-solid indent-4 fa-location-pin"></i>
                                        <span class="text-lg font-sans font-normal ">
                                            {{$now1->lesson_place}}
                                        </span>
                                    </div>
                                    <span class="text-xl font-sans pt-2 font-normal indent-8">
                                        {{$now1->lesson_type}}
                                    </span>
                                </div>
                            </tr>
                            @endif
                            @endif
                            @endforeach
                            @endif
                        </table>
                    </td>
                    @endfor
                </tr>
                @endforeach
                @endif
                @if ($SoT == "Teacher")
                @foreach($time_var as $time)
                <tr>
                    <td class="border w-48 text-center h-10 rounded-l-lg text-xl font-sans font-norm border-blue-200">
                        {{$time}}
                    </td>
                    @for ($i =0; $i!=6;$i++)
                    <td class="border w-96 rounded-md text-xl font-sans font-norm border-blue-200">
                        <table>
                            @if($now)

                            @foreach ($now as $now1)
                            @if( $now1->time == $time )
                            @if ($now1->date == Carbon\Carbon::parse($now_date1)->addDays($i)->format("Y-m-d"))

                            <tr>
                                <div class="text-center pt-2 font-bold">
                                    {{$now1->discipline}}
                                </div>

                            </tr>
                            <tr>
                                <div class="flex pt-2">
                                    <i class="fa-solid fa-chalkboard-user indent-4 fa-location-pin">
                                        <span class="text-lg font-sans font-normal indent-8">
                                            {{$now1->group}}
                                        </span>
                                    </i>
                                </div>
                            </tr>

                            <tr>
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-2 pt-2 items-center">
                                        <i class="fa-solid indent-4 fa-location-pin"></i>
                                        <span class="text-lg font-sans font-normal ">
                                            {{$now1->lesson_place}}
                                        </span>
                                    </div>
                                    <span class="text-xl font-sans pt-2 font-normal indent-8">
                                        {{$now1->lesson_type}}
                                    </span>
                                </div>

                            </tr>
                            @endif
                            @endif
                            @endforeach
                            @endif
                        </table>
                    </td>
                    @endfor
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>