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
    <div class="h-screen w-full py-4">
        <div class="w-full fixed">
            <div class="w-full flex flex-row justify-center ">
                <input wire:model="name" type="text"
                    class="w-1/3 ml-4 placeholder:italic placeholder:text-green-600 outline outline-offset-2 outline-emerald-400 rounded-md h-14 text-lg border border-green-600 text-blue-500 "
                    placeholder="Пожалуйста, введите логин от своего аккаунта moodle">

                <select class="w-1/3 select-component" wire:model="type_document">
                    <option class="text-blue-600" value=0>Выбор справки</option>
                    <option class="text-blue-600" value=1>Об обучении</option>
                    <option class="text-blue-600" value=2>На проезд</option>
                </select>

                <button
                    class="outline outline-offset-2 w-24 h-[3.5rem] text-lg font-medium outline-emerald-400 border border-green-400 bg-white text-green-600 rounded-md"
                    wire:click="request()">Заказать</button>
            </div>
            <div class="flex items-center justify-center py-10">
                <div class="flex items-center justify-center bg-clip-text text-transparent font-semibold h-16 w-3/5 bg-gradient-to-b from-red-800 from-1% via-red-600 via-60% to-red-800 to-2% border-dashed border-2 text-3xl">
                    <p>
                        Пожалуйста, введите логин, либо выберите академию
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-col py-32">
            <div class="h-1/2 flex flex-col items-center justify-center ">
                <div class="max-w-screen-2xl">
                    <div class="grid flex md:grid-cols-5 lg:gap-10 pt-16">
                        @foreach($academies as $key => $value)
                        <button wire:click="setAcademyKey({{$key}})"
                            class="bg-gradient-to-tr h-60 from-blue-800 from-60% flex items-center justify-center to-blue-700 p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                            <h2 class="text-2xl font-sans text-center font-medium text-white">
                                {{ $value }}
                            </h2>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>

            @if(isset($specializations[$selectAcademyKey]))
            <div class="ml-40 previous-specialization">
                @foreach($specializations[$selectAcademyKey] as $key => $specialization)
                <div class="font-sans text-3xl ml-4 font-extrabold text-green-600">{{$key}}</div>
                <div class="mt-2 mb-4 previous-specialization">
                    @foreach($specialization as $key => $value)
                    <p class="font-sans text-2xl px-2 w-11/12 flex items-center h-28 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01] tracking-wider font-semibold text-white">
                        {{$value}}
                    </p>
                    @endforeach
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>