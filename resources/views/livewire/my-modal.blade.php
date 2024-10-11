<div x-data="{ open: false }">
    <button @click="open = true" class="btn bg-blue-500 p-4">войти</button>

    <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-black opacity-50" @click="open = false"></div>
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">вход по лк</h3>
            </div>
            <div class="border-t border-gray-200">
                <div class="px-4 py-4 sm:px-6">
                    <input type="text" wire:model="inputData" class="form-input" placeholder="Введите данные">
                    <button @click="open = false; $wire.saveData()" class="btn btn-primary">продолжить</button>
                    <button @click="open = false" class="btn btn-secondary">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

</div>