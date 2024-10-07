<div>
    <div class = "w-full h-full">
        <div class="py-20">
            <div class = "flex justify-center items-center">
                <table
                    class="table border-separate border-spacing-1 rounded-lg font-sans font-normal text-xl text-white text-center mt-4 ml-2">
                    <thead class = "bg-gradient-to-br from-blue-700 h-12 w-96 from-60%  to-blue-900">
                        <tr>
                            <th class = "border w-72 rounded-md font-normal border-blue-200>ФИО преподавателя">ФИО преподавателя</th>
                            <th class = "border w-72 rounded-md font-normal border-blue-200>ФИО преподавателя">Дата</th>
                            <th class = "border w-72 rounded-md font-normal border-blue-200>ФИО преподавателя">Время</th>
                            <th class = "border w-72 rounded-md font-normal border-blue-200>ФИО преподавателя">Аудитория
                            </th>
                        </tr>
                    </thead>
                    <tbody class = "bg-gradient-to-br h-14 from-blue-600 from-60%  to-blue-900">
                        @foreach ($data as $schedule)
                            <tr>
                                <td class="border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                                    {{ $schedule->fio_teacher }}</td>
                                <td class="border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                                    {{ \Carbon\Carbon::parse($schedule->date)->format('d.m.Y') }}
                                <td class="border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                                    {{ \Carbon\Carbon::parse($schedule->time)->format('H:i') }}</td>
                                <td class="border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                                    {{ $schedule->classroom }}</td>
                                {{-- Выведите значения других столбцов  --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
