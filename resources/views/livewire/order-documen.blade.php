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
                @foreach($ar as $arr=>$arr1)
                    <option class="text-slate-500" value={{$arr}}>{{$arr1}}</option>
                @endforeach
            </select>

            <div>
                <div x-data="{ open: false }">
                    <button class="flex items-center justify-center px-4 text-xl font-medium border ml-4 border-green-400 h-16 bg-white rounded-md" wire:click="request1()" @click="open = true">Заказать</button>
                    @if (count($get_name) != 0 and $type_document != 0)
                    {{-- {{dd($get_name)}} --}}
                    <div x-show="open" class="fixed inset-0 flex items-center justify-center z-10">
                        <div class="" @click="open = false"></div>
                        <div class="bg-blue-900 rounded-xl overflow-hidden shadow-xl transform transition-all max-w-3xl w-full h-full max-h-[20rem]">
                            <div class="bg-gradient-to-b from-blue-700 to-80% to-blue-900 px-4 py-5 sm:px-6">
                                <button @click="open = false" class="flex items-top justify-end absolute inset-x-4 right-4 text-xl text-white font-medium btn btn-secondary">
                                    <i style = "" class="fa-solid fa-xmark fa-xl"></i></i> </button>
                                <h3 class="text-2xl text-center font-mono font-medium text-white">Проверьте и подтвердите свой выбор</h3>

                            </div>
                            <div class="px-8 py-6 border-t-2 border-gray-200">

                                <div class="font-mono text-white flex flex-row text-2xl pt-4">
                                    <p class="font-semibold flex">ФИО:</p>
                                    <p class="flex justify-center items-center px-4">
                                        @foreach ($get_name as $item)
                                        {{$item->last_name}}
                                        {{$item->first_name}}
                                        {{$item->middle_name}}
                                        @endforeach
                                    </p>
                                </div>
                                <div class="font-mono text-white flex flex-row pt-8 text-2xl">
                                    <p class=font-semibold>Заказанная справка:
                                        @foreach($ar as $arr=>$arr1)
                                            @if($type_document == $arr)
                                            <p class=px-4> {{$arr1}}</p>
                                            @endif
                                        @endforeach
                                    </p>
                                </div>


                                <div class="absolute inset-x-4 bottom-4 items-center flex justify-center">

                                    <button @click="open = false;"
                                        class="flex items-center  justify-center text-xl font-medium border border-green-400 text-white h-12 w-[9rem] rounded-lg"
                                        wire:click="request()">Заказать</button>
                                    {{-- <button  $wire.saveData() class="btn btn-primary">продолжить</button> --}}

                                </div>
                                <!-- st107185 -->
                            </div>
                        </div>
                    </div>
                    @else
                    <div x-data="{ open: false }"></div>
                    @endif
                </div>
            </div>
        </div>
        <div class="pt-8">
            <x-alert type="info" title="Информация" message="Пожалуйста, заполните форму ввода для заказа справки." />
        </div>
    </div>
</div>