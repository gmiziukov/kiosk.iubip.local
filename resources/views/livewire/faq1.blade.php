<div class="w-full h-full">
    <div class="flex justify-between mt-20 ">
        <button wire:click="redirectBack()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>
        <button wire:click="redirectToHome()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>

    <div class="flex items-center justify-center w-5/6 shadow-md">
        <div class="flex flex-col mt-10 p-20 w-5/6 shadow-md">
            @foreach($data as $val)
            <div class="font-sans text-white h-28 w-full flex items-center shadow justify-start text-xl">
                {{ $val->question }}
            </div>

            <div class="font-sans text-white h-28 w-full flex items-center justify-start text-xl">
                {{ $val->answer }}

            </div>
            @endforeach
        </div>
    </div>

</div>