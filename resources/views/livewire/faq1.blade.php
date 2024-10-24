<div class="w-full h-full">
    <div class="flex justify-between  ">
        <button wire:click="redirectBack()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>
        <button wire:click="redirectToHome()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>

    <div class="flex items-center justify-center mt-10 p-10 flex-col">
        <div class="flex h-full w-10/12 flex-col shadow-md flex-col">
            @foreach($data as $val)
            <div class="flex-col h-20 p-4 flex justify-end items-start text-white border-b-2 font-semibold shadow text-3xl">
                {{ $val->question }}
            </div>
            <div class="h-full p-4 text-justify flex justify-start items-center text-white w-full text-2xl">
                {{ $val->answer }}
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- composer remove rakibdevs/openweather-laravel-api -->