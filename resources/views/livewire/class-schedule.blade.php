<div class="h-full w-full">
    <div class="flex items-center justify-center px-4">
        <input
            class="placeholder:italic placeholder:text-green-600 rounded-md ml-2 w-1/2 text-xl h-16 border border-green-600 text-blue-500"
            placeholder="Введите нужную группу" wire:model="group" type="text" value="">
        <button
            class="outline text-xl ml-8 font-medium border border-green-400 h-14 w-20 bg-white text-green-600 rounded-md"
            wire:click="search()">найти</button>
    </div>

    <div class="">
        <table class="border-separate border-spacing-1 rounded-lg font-sans font-normal text-xl text-white p-4">

            <thead class="bg-gradient-to-br text-center font-bold from-blue-700 h-16 w-96 from-60% to-blue-900">
                <tr>
                    <td class="border rounded-l-lg border-blue-200">
                        Время
                    </td>
                    <td class="border border-blue-200">
                        Понедельник
                    </td>
                    <td class="border border-blue-200">
                        Вторник
                    </td>
                    <td class="border border-blue-200">
                        Среда
                    </td>
                    <td class="border border-blue-200">
                        Четверг
                    </td>
                    <td class="border border-blue-200">
                        Пятница
                    </td>
                    <td class="border rounded-r-lg border-blue-200">
                        Субота
                    </td>
                </tr>
            </thead>

            <tbody class="bg-gradient-to-br h-14 from-blue-600 from-60%  to-blue-900">
                @if ($SoT == "Student")

                @foreach($time_var as $time)
                <tr>
                    <td class="border w-48 text-center h-10 rounded-l-lg text-xl font-sans font-norm border-blue-200">
                        {{$time}}
                    </td>
                    @for ($i = 0; $i!=6;$i++)
                    <td class="border w-96 rounded-md text-xl font-sans font-norm border-blue-200">
                        <table>
                            @foreach ($now as $now1)
                            @if( $now1->time == $time )
                            @if ($now1->date == Carbon\Carbon::parse($now_date1)->addDays($i)->format("Y-m-d"))
                            <tr>
                                <div class="text-center pt-2 font-bold">
                                    <ul>
                                        {{$now1->discipline}}
                                    </ul>
                                </div>
                            </tr>

                            <tr>
                                <div class="flex pt-2">
                                    <i class="fa-solid fa-chalkboard-user indent-4 fa-location-pin">
                                        <span class="text-lg font-sans font-normal indent-8">
                                            {{$now1->teacher}}
                                        </span>
                                    </i>
                                </div>
                            </tr>

                            <tr>
                                <div class="flex items-center justify-between">
                                    <div class="flex space-x-2 pt-2 items-center">
                                        <i class="fa-solid indent-4 fa-location-pin"></i>
                                        <span class="text-lg font-sans font-normal ">
                                            {{$now1->lesson_place}}
                                        </span>
                                    </div>
                                    <span class="text-xl font-sans pt-2 font-normal indent-8">
                                        {{$now1->lesson_type}}
                                    </span>
                                </div>
                            </tr>
                            @endif
                            @endif
                            @endforeach
                        </table>
                    </td>
                    @endfor
                </tr>
                @endforeach
                @endif
                @if ($SoT == "Teacher")
                {{$SoT}}
                @foreach($time_var as $time)
                <tr>
                    <td>
                        {{$time}}
                    </td>
                    @for ($i =0; $i!=6;$i++)
                    <td class="border w-96 rounded-md text-xl font-sans font-norm   al border-blue-200">
                        <table>

                            @foreach ($now as $now1)
                            @if( $now1->time == $time )
                            @if ($now1->date == Carbon\Carbon::parse($now_date1)->addDays($i)->format("Y-m-d"))
                            <tr>

                                {{$now1->lesson_place}}

                            </tr>
                            <tr>

                                {{$now1->lesson_type}}


                            </tr>
                            <tr>
                                {{$now1->group}}
                            </tr>
                            <tr>

                                {{$now1->discipline}}


                            </tr>
                            @endif
                            @endif
                            @endforeach
                        </table>
                    </td>
                    @endfor
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <x-dialog-modal wire:model="confirmingUserDeletion">
        <x-slot name="title">
            Delete Account
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                Delete Account
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>