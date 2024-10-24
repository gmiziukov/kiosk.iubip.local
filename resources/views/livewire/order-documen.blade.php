<div>
    <div class="flex justify-between">
        <button wire:click="redirectBack()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>
        <button wire:click="redirectToHome()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>
    <div class="h-full w-full py-4">
        <div class="w-full flex flex-row justify-center ">
            <input wire:model="name" type="text"
                class="w-1/3 ml-4 rounded-md pl-2 w-1/2 text-2xl h-16 border border-green-600"
                placeholder="Пожалуйста, введите логин от своего аккаунта moodle">

            <select class="w-1/3 ml-4 rounded-md pl-2 w-1/2 text-2xl h-16 border border-green-600 text-slate-500" wire:model="type_document">
                <option class="text-slate-500" value=0>Выбор справки</option>
                <option class="text-slate-500" value=1>Об обучении</option>
                <option class="text-slate-500" value=2>На проезд</option>
            </select>

            <button
                class="flex items-center justify-center px-4 text-xl font-medium border ml-4 border-green-400 h-16 bg-white rounded-md"
                wire:click="request()">Заказать</button>
        </div>
        <div class="pt-8">
            <x-alert type="info" title="Информация" message="Пожалуйста, заполните форму ввода для заказа справки." />
        </div>
    </div>
</div>