<div class = "h-full w-full bg-white">
    <div class = "flex ">
        <input
            class = "placeholder:italic  rounded-md ml-2 w-72 text-xl h-16 mt-10 border border-green-600 text-blue-500"
            wire:model = "currentDate" type = "date" id = "start" name = "search-data" />
        <input
            class = "placeholder:italic placeholder:text-green-600 rounded-md ml-2 w-1/2 text-xl h-16 mt-10 border border-green-600 text-blue-500"
            placeholder="Введите нужную группу" wire:model = "group" type = "text" value = "">
        <button
            class = "outline text-xl ml-8 font-medium border border-green-400 h-14 w-20 mt-11 bg-white text-green-600 rounded-md"
            wire:click="search()">найти</button>
    </div>
    <div class = "">
    <table class = "border-separate border-spacing-1 rounded-lg font-sans font-normal text-xl text-white text-center mt-4 ml-2">
        <thead class = "bg-gradient-to-br from-blue-700 h-12 w-96 from-60%  to-blue-900">
            <tr>
                <td class="border w-72 rounded-md font-normal border-blue-200">
                    Дата
                </td>
                <td class="border w-80 rounded-md font-sans font-normal border-blue-200">
                    Место
                </td>
                <td class="border rounded-md text-xl font-sans font-normal border-blue-200">
                    Дисциплина
                </td>
                <td class="border w-72 rounded-md text-xl font-sans font-normal border-blue-200">
                    Время
                </td>
                <td class="border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                    Преподаватель
                </td>
            </tr>
        </thead>
        <tbody class = "bg-gradient-to-br h-14 from-blue-600 from-60%  to-blue-900">
        @foreach ($data as $enddata)
            <tr>
                <td class = "rounded-md h-14  border border-blue-200">
                    {{ $enddata->date }}
                </td>
                <td class = "rounded-md border border-blue-200">
                    {{ $enddata->lesson_place }}
                </td>
                <td class = "rounded-md border border-blue-200">
                    {{ $enddata->discipline }}
                </td>
                <td class = "rounded-md border border-blue-200">
                    {{ $enddata->time }}
                </td>
                <td class = "rounded-md border border-blue-200">
                    {{ $enddata->teacher }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    {{-- {{dd($data)}} --}}

</div>
