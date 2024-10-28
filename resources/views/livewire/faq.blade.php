<div class="w-full h-full">

    <div class="flex justify-between">
        <button wire:click="redirectBack()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>
        <input wire:model = "search_var" type="text">
        <button wire:click = "search()" >search</button>
        <button wire:click="main()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Все</span>
        </button>
        <button wire:click="ORD('Преподаватель')" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Преподаватель</span>
        </button>
        <button wire:click="ORD('Студент')" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Студент</span>
        </button>
        <button wire:click="ORD('Абитуриент')" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Абитуриент</span>
        </button>
        <!-- Проверка на вывод инфы -->
        <button wire:click="ORD('Купе')" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Сотрудник</span>
        </button>
        <button wire:click="()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>
    <div wire:loading.remove wire:target="getStudentGrades">
        <div class="mt-10">
            @if(Session::has('error'))
            <x-alert type="info" title="Информация" message="{{ Session::get('error') }}" />
            @endif

            @if($data)
            <div class="grid grid-cols-3 gap-x-2 gap-y-6 mt-8">
                @foreach($data as $data1)
                <button wire:click='vie({{ $data1->id }})'>
                    <div class="font-sans text-white h-[4.8rem] w-full shadow-md flex shadow shadow-green-600 justify-start pl-4 text-xl">
                        <div class="w-[36.5rem] flex justify-between relative">
                            <div class="absolute -top-1.5 w-28 flex items-center justify-center right-5 z-10 rounded bg-white">
                                <p class="text-left text-mono z-9 font-bold text-sm" style="color: #101b32;">{{ $data1->category }}</p>
                            </div>
                            <p class="text-left flex items-center w-[34rem]">{{ $data1->question }}</p>
                            <i class="flex items-center fa-solid fa-caret-up fa-rotate-90 fa-xl"></i>
                        </div>
                    </div>
                </button>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <div wire:loading wire:target="getStudentGrades">
        <div class="text-white mt-[19rem] text-6xl flex items-center justify-center">
            <img src="{{ asset('storage/output-onlinegiftools.gif') }}" alt="Анимация загрузки">
        </div>
    </div>
</div>