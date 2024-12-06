<div class="w-full h-full flex flex-col space-y-4">
    <div class="w-full h-24 flex">
        <div class="w-52 flex items-center justify-center">
            <button wire:click="redirectBack" class="btn-back">
                <i class="fa-solid fa-chevron-left fa-xl"></i>
                <span class="text-xl">Назад</span>
            </button>
        </div>
        <div class="flex-1">
            <div class="h-full flex items-center justify-center space-x-2 px-2">
                <input wire:model="search" type="text" class="input-search" placeholder="Пожалуйста, введите фамилию преподавателя">
                <button wire:click="searchAcademicRetakeSchedule" class="btn-search">
                    <i class="fa-solid fa-search fa-xl"></i>
                    <span class="ml-2">Найти</span>
                </button>
            </div>
        </div>
        <div class="w-52 flex items-center justify-center">
            <button wire:click="redirectToHome" class="btn-home">
                <i class="fa-solid fa-home fa-xl"></i>
                <span class="text-xl">Главная</span>
            </button>
        </div>
    </div>

    <!-- Preloader -->
    <div class="h-full" wire:loading wire:target="searchAcademicRetakeSchedule">
        <div class="h-full flex space-x-2 items-center justify-center text-white text-3xl font-semibold">
            <i class="fa-solid fa-spinner fa-spin-pulse"></i>
            <span>Пожалуйста, подождите, идет загрузка данных</span>
        </div>
    </div>

    <div class="h-full px-6" wire:loading.remove wire:target="searchAcademicRetakeSchedule">
        @if(Session::has('error'))
        <div class="h-full flex items-center justify-center">
            <x-alert type="error" title="Ошибка" message="{{ Session::get('error') }}" />
        </div>
        @endif

        @if(!is_null($data) && count($data) != 0)
        <div class="border border-slate-500 rounded">
            <table class="w-full border-separate border-spacing-2 border border-slate-500 text-white text-xl">
                <thead>
                    <tr class="bg-gradient-to-br from-blue-800 from-60% to-blue-700">
                        <th class="w-auto border border-slate-600 rounded p-2">Преподаватель</th>
                        <th class="w-auto border border-slate-600 rounded p-2">Дата</th>
                        <th class="w-auto border border-slate-600 rounded p-2">Время</th>
                        <th class="w-auto border border-slate-600 rounded p-2">Аудитория</th>
                        <th class="w-auto border border-slate-600 rounded p-2">Учебный год</th>
                        <th class="w-auto border border-slate-600 rounded p-2">Полугодие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr class="bg-gradient-to-br from-blue-800 from-60% to-blue-700">
                        <td class="w-auto border border-slate-700 rounded p-2 text-center">{{ $value->fio }}</td>
                        <td class="w-auto border border-slate-700 rounded p-2 text-center">{{ \Carbon\Carbon::parse($value->retake_date)->format('d.m.Y') }}</td>
                        <td class="w-auto border border-slate-700 rounded p-2 text-center">{{ $value->retake_time }}</td>
                        <td class="w-auto border border-slate-700 rounded p-2 text-center">{{ $value->room }}</td>
                        <td class="w-auto border border-slate-700 rounded p-2 text-center">{{ $value->academic_year }}</td>
                        <td class="w-auto border border-slate-700 rounded p-2 text-center">{{ $value->half_year }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="h-full flex items-center justify-center">
            @if(Session::has('info'))
            <x-alert type="info" title="Информация" message="{{ Session::get('info') }}" />
            @else
            <x-alert type="info" title="Информация" message="График пересдач академических задолженностей на текущий учебный год отсутствует." />
            @endif
        </div>
        @endif
    </div>
</div>