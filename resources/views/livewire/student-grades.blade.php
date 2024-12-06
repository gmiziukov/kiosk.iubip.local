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
                <input wire:model="search" type="text" class="input-search" placeholder="Пожалуйста, введите номер зачетной книжки">
                <button wire:click="getStudentGrades" class="btn-search">
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
    <div class="h-full" wire:loading wire:target="getStudentGrades">
        <div class="h-full flex space-x-2 items-center justify-center text-white text-3xl font-semibold">
            <i class="fa-solid fa-spinner fa-spin-pulse"></i>
            <span>Пожалуйста, подождите, идет загрузка данных</span>
        </div>
    </div>

    <div class="h-full" wire:loading.remove wire:target="getStudentGrades">
        @if(Session::has('error'))
        <div class="h-full flex items-center justify-center">
            <x-alert type="error" title="Ошибка" message="{{ Session::get('error') }}" />
        </div>
        @endif

        @if(!is_null($data) && count($data) != 0)
        <div class="border rounded">
            <table class="w-full text-white text-xl">
                <thead>
                    <tr class="border">
                        <th class="p-1">Дисциплина</th>
                        <th class="p-1">Вид контроля</th>
                        <th class="p-1">Результат</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                    <tr class="border">
                        <td colspan="3" class="p-1 text-center font-bold">Семестр {{ $key }}</td>
                    </tr>
                    @foreach($value as $item)
                    <tr class="border">
                        <td class="p-1">{{ $item['discipline_name'] }}</td>
                        <td class="p-1 text-center">{{ $item['control_name'] }}</td>
                        <td class="p-1 text-center">
                            @if(is_null($item['grade']))
                            Отсутсвует
                            @else
                            @if($item['control_name'] == 'Зачет')
                            @if($item['grade'] == 1)
                            Зачтено
                            @else
                            Не зачтено
                            @endif
                            @else
                            {{ $item['grade'] }}
                            @endif
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="h-full flex items-center justify-center">
            <x-alert type="info" title="Информация" message="Для отображения информации воспользуйтесь формой для поиска." />
        </div>
        @endif
    </div>
</div>