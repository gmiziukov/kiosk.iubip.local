<div>
    <x-slot name="head">
    </x-slot>
    <x-slot name="logotip">
        <img src="https://www.iubip.ru/local/templates/univer/img/logo.svg">
        <img src="https://www.centrinvest.ru/_ipx/_/logo.svg">
    </x-slot>
    <div class = "bg-[url('/img/colorkit.png')] h-screen w-full ">

        <div class = "flex item-center flex-wrap border-2">
            <input type = "text"
                class = " placeholder:italic placeholder:text-green-600 outline outline-offset-2 outline-emerald-400 rounded-md ml-8 w-1/2 text-xl h-16 mt-14 border border-green-600 text-blue-500"
                placeholder="Введите свою фамилию"></input>
            <input type = "text"
                class = "placeholder:italic placeholder:text-green-600 outline outline-offset-2 outline-emerald-400 w-1/2 rounded-md h-16 text-xl ml-8 mt-8 border border-green-600 text-blue-500"
                placeholder="Введите свою группу"></input>

        <div class = "flex item-right justify-right">
            <button class="outline outline-offset-2 w-24 h-12 text-lg ml-10 font-medium outline-emerald-400 border mr-8 border-green-400 bg-white text-green-600 rounded-md">Поиск</button>
        </div>
        <div class = "text-red-700 text-center text-3xl px-2"> Информация:</div>

        <div class="">
            <div class = "text-center text-3xl text-red-700/90 pt-2 font-sans">Пожалуйста, заполни поля как написано!</div>
        </div>
    </div>
    </div>
</div>
