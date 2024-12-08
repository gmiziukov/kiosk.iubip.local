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
                <input wire:model="search" type="text" class="input-search" placeholder="Пожалуйста, введите интересующий вас вопрос">
                <button wire:click="getQuestions" class="btn-search">
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

    <div class="flex justify-center space-x-9">
        <button wire:click="getQuestionsFromCategory" class="btn-category">Все</button>
        @foreach($listOfCategories as $value)
        <button wire:click="getQuestionsFromCategory({{ $value->id }})" class="btn-category">{{ $value->name }}</button>
        @endforeach
    </div>

    <!-- Preloader -->
    <div class="h-full" wire:loading wire:target="getQuestions, getQuestionsFromCategory">
        <div class="h-full flex space-x-2 items-center justify-center text-white text-3xl font-semibold">
            <i class="fa-solid fa-spinner fa-spin-pulse"></i>
            <span>Пожалуйста, подождите, идет загрузка данных</span>
        </div>
    </div>

    <div class="h-full px-6" wire:loading.remove wire:target="getQuestions, getQuestionsFromCategory">
        @if(Session::has('error'))
        <div class="h-full flex items-center justify-center">
            <x-alert type="error" title="Ошибка" message="{{ Session::get('error') }}" />
        </div>
        @endif

        @if(!is_null($data) && count($data) != 0)
        <div class="grid grid-cols-3 gap-4">
            @foreach($data as $value)
            <div wire:click="showAnswer({{ $value->id }})" class="relative flex rounded bg-blue-950 bg-opacity-50 shadow shadow-green-600 p-4 text-xl text-white cursor-pointer">
                {{ $value->question }}
                <span class="absolute -top-2 right-2 bg-green-500 rounded p-0.5 text-sm">{{ $value->category_name }}</span>
            </div>
            @endforeach
        </div>
        @else
        <div class="h-full flex items-center justify-center">
            @if(Session::has('info'))
            <x-alert type="info" title="Информация" message="{{ Session::get('info') }}" />
            @else
            <x-alert type="info" title="Информация" message="Для отображения информации воспользуйтесь формой для поиска или выберите категорию." />
            @endif
        </div>
        @endif
    </div>

    <!-- Modal dialog to show answer on question -->
    <x-dialog-modal wire:model="isAnswerModalVisible" maxWidth="5xl">
        <form>
            @csrf
            <x-slot name="title">
                Форма просмотра ответа на вопрос
            </x-slot>

            <x-slot name="content">
                <textarea cols="5" rows="10" class="w-full border border-gray-300 rounded px-2 text-xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" readonly>{{ $answer }}</textarea>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="$toggle('isAnswerModalVisible')" type="button" class="w-full sm:w-auto bg-gray-500 hover:bg-gray-600 rounded shadow-xl px-2 py-1 text-white">
                    {{ __('Закрыть') }}
                </button>
            </x-slot>
        </form>
    </x-dialog-modal>
</div>