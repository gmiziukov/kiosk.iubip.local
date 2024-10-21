<div class="w-full h-full">
    <div class="flex justify-between">
        <button wire:click="redirectBack()" class="w-[11.7rem] h-[3.75rem] flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>

        <div class="flex justify-center items-center w-full">
            <input
                class="rounded-md pl-2 w-1/2 text-2xl h-16 border border-green-600 text-blue-500"
                placeholder="Пожалуйста, введите номер зачетной книжки" wire:model="search" type="text" value="">
            <button wire:click="getStudentGrades" class="flex items-center justify-center px-4 text-xl font-medium border ml-8 border-green-400 h-16 bg-white rounded-md">
                <i class="fa-solid fa-search fa-xl"></i>
                <span class="ml-2">Найти</span>
            </button>
        </div>

        <button wire:click="redirectToHome" class="w-[11.7rem] h-[3.75rem] flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>
    <div class="flex items-center justify-center">
        <div wire:loading.remove wire:target="getStudentGrades">
            <div>
                <table class="border-separate mt-4 overflow-y-auto rounded-lg w-full font-sans font-normal text-xl text-white">
                    <thead class="bg-gradient-to-b h-12 from-blue-700 from-20% to-blue-900 ">
                        <tr>
                            <td class="border text-2xl text-center font-semibold rounded-l-lg w-[50rem] border-blue-200">
                                Дисциплина
                            </td>
                            <td class="border text-2xl text-center font-semibold w-[40rem] border-blue-200">
                                Вид контроля
                            </td>
                            <td class="border text-2xl text-center font-semibold w-[15rem] rounded-r-lg border-blue-200">
                                Результат
                            </td>
                        </tr>
                    </thead>
                    <tbody class="bg-gradient-to-b h-14 from-blue-700 via-30% via-blue-800 to-blue-900">
                        @if(count($data) != NULL)
                        @foreach ($data as $data1)
                        <tr>
                            <td class="border w-48 px-4 h-10 rounded-l-lg w-[35rem] text-xl font-norm border-blue-200">
                                {{$data1->name}}
                            </td>
                            <td class="border w-48 text-center h-10 text-xl w-[26rem] font-norm border-blue-200">
                                {{$data1->type_name}}
                            </td>
                            <td class="border w-48 text-center h-10 rounded-r-lg w-[10rem] text-xl font-norm border-blue-200">
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
                        @else
                        <div class="pt-8">
                            <x-alert type="warning" title="Внимание" message="Пожалуйста, укажите корректный номер зачетной книжки." />
                        </div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div wire:loading wire:target="getStudentGrades">
            <div class="text-white mt-[19rem] text-6xl flex items-center justify-center">
                <img src="{{ asset('storage/output-onlinegiftools.gif') }}" alt="Анимация загрузки">
            </div>
        </div>
    </div>
</div>