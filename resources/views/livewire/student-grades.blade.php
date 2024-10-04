<div>
    <x-slot name="head">
    </x-slot>
    <x-slot name="logotip">
        <img class = "w-32" src="{{ asset('img/logo_dark.png') }}">
        <img class = "w-48" src="https://www.centrinvest.ru/_ipx/_/logo.svg">
    </x-slot>
    <div class="h-screen w-full">
        <div class="flex flex-row w-full p-4">
            <div class = "w-4/5 flex flex-row">
                <div class="w-full flex flex-col mt-4 space-y-6">
                    <input type="text" name="" id="" class = "w-auto placeholder:italic placeholder:text-green-600 outline outline-offset-2 outline-emerald-400 rounded-md h-16 text-xl border border-green-600 text-blue-500"
                    placeholder="Введите свою фамилию">
                    <input type="text" name="" id="" class = "w-auto placeholder:italic placeholder:text-green-600 outline outline-offset-2 outline-emerald-400 rounded-md h-16 text-xl border border-green-600 text-blue-500" 
                    placeholder="Введите свою группу">
                </div>
                <div class="flex items-center justify-center ml-8">
                    <button
                        class="outline outline-offset-2 w-24 h-12 text-lg font-medium outline-emerald-400 border border-green-400 bg-white text-green-600 rounded-md">Поиск</button>
                </div>

            </div>
            <div class="w-1/3 ml-8 flex items-center justify-center">
                <div class = "bg-clip-text text-transparent font-semibold bg-gradient-to-b from-red-800 from-1% via-red-600 via-60% to-red-800 to-2% border-dashed border-2 text-3xl list-none">
                    <li class = "text-center"> Пожалуйста, </li>
                    <li>заполни поля как указано в форме!</li>
                </div>
            </div>
        </div>
    </div>
</div>
