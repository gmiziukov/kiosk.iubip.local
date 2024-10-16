<div class="h-full w-full flex flex-col space-y-4">
    <!-- Кнопки навигации -->
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
    <!-- Уведомление -->
    <div class="pt-6">
        <x-alert type="warning" title="Внимание" message="Пожалуйста, выберите вашу роль: обучающийся или преподаватель, чтобы отобразить соответствующую информацию." />
    </div>


    <!-- Выбор роли пользователя -->
    <div class="grow flex flex-row space-x-10 items-center justify-center">
        <div class="w-[50rem] h-[21rem] items-center space-x-10 justify-center flex flex-row">
            <a href="#" class="w-[50rem]">
                <div class=" h-[20rem] flex items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded-md shadow-md shadow-emerald-400 p-6">
                    <h4 class="text-white text-4xl">Обучающийся</h4>
                </div>
            </a>
        </div>
        <div class="w-[50rem] h-[21rem] items-center space-x-10 justify-center flex flex-row">
            <a href="#" class="w-[50rem]">
                <div class="h-[20rem] flex items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded-md shadow-md shadow-emerald-400 p-6">
                    <h4 class="text-white text-4xl">Преподаватель</h4>
                </div>
            </a>
        </div>
    </div>
</div>