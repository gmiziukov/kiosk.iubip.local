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
            <input wire:model="name"  type="text"
                class="w-1/3 ml-4 rounded-md pl-2 w-1/2 text-2xl h-16 border border-green-600"
                placeholder="Пожалуйста, введите логин от своего аккаунта moodle">

            <select class="w-1/3 ml-4 rounded-md pl-2 w-1/2 text-2xl h-16 border border-green-600 text-slate-500" wire:model="type_document">
                <option class="text-slate-500" value=0>Выбор справки</option>
                <option class="text-slate-500" value=1>Об обучении</option>
                <option class="text-slate-500" value=2>На проезд</option>
            </select>
            {{-- <script>

                Livewire.emit('postAdded')
            
            </script> --}}
            {{-- <button
            class="flex items-center justify-center px-4 text-xl font-medium border ml-4 border-green-400 h-16 bg-white rounded-md"
              >Заказать</button> --}}
            <div>
 
                <div x-data="{ open: false }">
                    <button wire:click="request1()" @click="open = true" class="btn bg-blue-500 p-4">войти</button>
                    @if ($get_name)
                    {{-- {{dd($get_name)}} --}}
                        <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50">
                            <div class="fixed inset-0 bg-black opacity-50" @click="open = false"></div>
                            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                                <div class="px-4 py-5 sm:px-6">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">ты ли это?</h3>
                                </div>
                                <div class="border-t border-gray-200">
                                    <div class="px-4 py-4 sm:px-6">
                                        <div class = "flex flex-col gap-3">
                                        
                                            справка на имя:
                                            @foreach ($get_name as $item)
                                                {{$item->last_name}}
                                                {{$item->first_name}}
                                                {{$item->middle_name}}
                                            @endforeach 
                                        </div>
                                        <button
                                        @click="open = false;
                                        class="flex items-center justify-center px-4 text-xl font-medium border ml-4 border-green-400 h-16 bg-white rounded-md"
                                        wire:click=""  >Заказать</button>
                                        {{-- <button  $wire.saveData()" class="btn btn-primary">продолжить</button> --}}
                                        <button @click="open = false" class="btn btn-secondary">Закрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else 
                    <div x-data="{ open: false }"></div>
                    @endif  
                    
                </div>
            </div>

            
            @if ($get_name)
                @foreach ($get_name as $item)
                    {{$item->last_name}}
                    {{$item->first_name}}
                    {{$item->middle_name}}
                @endforeach 

                    
            @else
                
            @endif

        </div>
        <div class="pt-8">
            <x-alert type="info" title="Информация" message="Пожалуйста, заполните форму ввода для заказа справки." />
        </div>
    </div>

    
</div>