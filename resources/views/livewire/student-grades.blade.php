<div>
    <x-slot name="head">
    </x-slot>
    <x-slot name="logotip">
        <img src="https://www.iubip.ru/local/templates/univer/img/logo.svg">
        <img src="https://www.centrinvest.ru/_ipx/_/logo.svg">
    </x-slot>
    <div class = "bg-gradient-to-br from-sky-900 via-blue-600 to-cyan-700 h-screen w-full ">
        <div class = "flex item-center justify-center">
            <input type = "text"
                class = "placeholder:italic placeholder:text-green-600 rounded-md ml-2 w-1/2 text-xl h-16 mt-10 border border-green-600 text-blue-500"
                placeholder="Введите свою фамилию"></input>
            <input type = "text"
                class = "placeholder:italic placeholder:text-green-600 w-1/2 rounded-md h-16 text-2xl ml-4 mt-10 border border-green-600 text-blue-500"
                placeholder="Введите свою группу"></input>
        </div>
        <div class = "flex item-center justify-center">
            <button
                class="outline outline-offset-2 text-xl ml-10 font-medium outline-emerald-400 border mr-8 border-green-400 w-20 mt-10 bg-white text-green-600 rounded-md">Поиск</button>
        </div>
        <div
            class = "grid place-content-center box-decoration-slice text-center mt-12 bg-gradient-to-r text-5xl from-indigo-600 to-pink-500 text-white px-2">
            Ну привет, сталкер
        </div>
        <div class="flex flex-col">
            <div class = "text-center form-textarea text-4xl text-red-700 font-sans">
                Пожалуйста, заполни поля как написано выше!
            </div>
        </div>
    </div>
</div>
