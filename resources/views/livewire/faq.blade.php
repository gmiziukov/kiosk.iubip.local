<div class="w-full h-full">

    <div class="flex justify-between">
        <button wire:click="redirectBack()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>
        <button wire:click="()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Все</span>
        </button>
        <button wire:click="ORD('Преподаватель)" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Преподаватель</span>
        </button>
        <button wire:click="ORD('Студент)" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Студент</span>
        </button>
        <button wire:click="ORD('Абитуриент)" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Абитуриент</span>
        </button>
        <button wire:click="ORD('Сотрудники')" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <span class="text-xl">Сотрудники</span>
        </button>
        <button wire:click="()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>

    <div class="grid grid-cols-3 gap-2 mt-4">
        @foreach($data as $data1)
        <button wire:click='vie({{ $data1->id }})'>
            <div class="font-sans text-white h-16 w-full shadow-md flex items-center shadow shadow-green-600 justify-start pl-4 text-xl">
                <div class="w-[36.5rem] flex justify-between items-center">
                    <p class="text-left w-[34rem]">{{ $data1->question }}</p> {{ $data1->category }} <i class="fa-solid fa-caret-up fa-rotate-90 fa-xl"></i>
                </div>
            </div>
        </button>
        @endforeach
    </div>
</div>