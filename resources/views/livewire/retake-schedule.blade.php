<div>
    <div class="flex justify-between">
        <button wire:click="redirectBack()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>

        <div class="flex justify-center items-center w-full">
            <input
                wire:model="get_name"
                class="rounded-md pl-2 w-1/2 text-2xl h-16 border border-green-600 text-blue-500"
                placeholder="Пожалуйста, введите ФИО преподавателя">

            <button wire:click="search" class="flex items-center justify-center px-4 text-xl font-medium border ml-8 border-green-400 h-16 bg-white rounded-md">
                <i class="fa-solid fa-search fa-xl"></i>
                <span class="ml-2">Найти</span>
            </button>
        </div>

        <button wire:click="redirectToHome()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>
    <div class="flex items-center justify-center">
        <div wire:loading wire:target="search">
            <div class="text-white mt-[19rem] text-6xl">
            <i class="fa-solid fa-spinner fa-spin-pulse" style="color: #16243c;"></i>
                <!-- <img src="{{ asset('storage/output-onlinegiftools.gif') }}" alt="Анимация загрузки"> -->
            </div>
        </div>
    </div>

    <div class=w-full wire:loading.remove wire:target="search">

        <div class="mt-8">
            @if(Session::has('error'))
            <x-alert type="warning" title="Внимание" message="{{ Session::get('error') }}" />
            @endif

            @if(count($data) != NULL)

            <div class="w-full h-full mt-8 flex items-center justify-center">
                <div class="">
                    <div class="flex justify-center ">
                        <table class="table border-separate border-spacing-2 font-sans font-medium text-xl text-white text-center">
                            <thead class="bg-gradient-to-b from-blue-700 h-12 w-1/5 from-20% to-blue-900">
                                <tr class="border w-96 h-[3rem] rounded-l-lg border-blue-200">
                                    <th class="border w-96 rounded-l-lg border-blue-200">ФИО преподавателя</th>
                                    <th class="border w-96 border-blue-200">Дата</th>
                                    <th class="border w-96 border-blue-200">Время</th>
                                    <th class="border w-96 rounded-r-lg border-blue-200">Аудитория</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gradient-to-b from-blue-700 via-30% via-blue-800 to-blue-900">
                                @foreach ($data as $schedule)
                                <tr class="h-[3rem]">
                                    <td class="border w-96 rounded-l-lg border-blue-200">
                                        {{ $schedule->fio_teacher }}
                                    </td>
                                    <td class="border w-96 border-blue-200">
                                        {{ \Carbon\Carbon::parse($schedule->date)->format('d.m.Y') }}
                                    </td>
                                    <td class="border w-96  border-blue-200">
                                        {{ \Carbon\Carbon::parse($schedule->time)->format('H:i') }}
                                    </td>
                                    <td class="border w-96 rounded-r-lg border-blue-200">
                                        {{ $schedule->classroom }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @elseif (count($data) == 0 && !Session::has('error'))
        <x-alert type="info" title="Информация" message="На данный момент график пересдач отсутствует." />
        @endif
    </div>
</div>