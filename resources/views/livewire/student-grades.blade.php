<div class="w-full h-full">
    <div class="flex justify-between">
        <button wire:click="redirectBack()" class="w-[11.7rem] h-[3.75rem] flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>

        <div class="flex justify-center mt-10 items-center w-full">
            <input
                class="placeholder:italic placeholder:text-green-600 rounded-md pl-2 w-1/2 text-xl h-16 border border-green-600 text-blue-500"
                placeholder="Пожалуйста, введите логин от своего аккаунта moodle">
            <button
                class="outline text-xl font-medium border ml-8 border-green-400 h-14 w-20 bg-white text-green-600 rounded-md"
                wire:click="search()">найти</button>
        </div>

        <button wire:click="redirectToHome()" class="w-[11.7rem] h-[3.75rem] flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>

    <div class="flex">
        <table class="border-separate px-36 mt-4 mb-2 overflow-y-auto rounded-lg w-full font-sans font-normal text-xl text-white">
            <thead class="bg-gradient-to-b from-blue-700 text-center h-14 from-20% to-blue-900 sticky top-0">
                <tr>
                    <td class="border text-2xl font-semibold rounded-l-lg w-[35rem] border-blue-200">
                        Дисциплина
                    </td>
                    <td class="border text-2xl font-semibold w-[26rem] border-blue-200">
                        Вид контроля
                    </td>
                    <td class="border text-2xl font-semibold rounded-r-lg border-blue-200">
                        Результат
                    </td>
                </tr>
            </thead>
            <tbody class="bg-gradient-to-b h-14 from-blue-700 via-30% via-blue-800 to-blue-900">
                @foreach ($data as $data1)
                <tr>
                    <td class="border w-48 px-4 h-10 rounded-l-lg text-xl font-norm border-blue-200">
                        {{$data1->name}}
                    </td>
                    <td class="border w-48 text-center h-10 text-xl font-norm border-blue-200">
                        {{$data1->type_name}}
                    </td>
                    <td class="border w-48 text-center h-10 rounded-r-lg text-xl font-norm border-blue-200">
                        @if ($data1->grade == 1)
                        <span>Зачет</span>
                        @elseif ($data1->grade == 0)
                        <span>Не зачтено</span>
                        @else
                        <span>{{$data1->grade}}</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>