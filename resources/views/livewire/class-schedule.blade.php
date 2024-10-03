<div class = "h-full w-full">
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
                        время
                    </td>
                    <td class="border w-72 rounded-md font-normal border-blue-200">
                        понедельник
                    </td>
                    <td class="border w-80 rounded-md font-sans font-normal border-blue-200">
                        вторник
                    </td>
                    <td class="border rounded-md text-xl font-sans font-normal border-blue-200">
                        среда 
                    </td>
                    <td class="border w-72 rounded-md text-xl font-sans font-normal border-blue-200">
                        четверг 
                    </td>
                    <td class="border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                        пятница 
                    </td>
                    <td class="border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                        субота 
                    </td>
                    <td class="border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                        воскресенье 
                    </td>
                </tr>
            </thead>
            <tbody class = "bg-gradient-to-br h-14 from-blue-600 from-60%  to-blue-900">
                {{-- @foreach ($now as $now1)
        
                    {{$now1->date}}
                @endforeach --}}
                @foreach ($now as $now1)
                    {{-- {{dd($now1->date);}} --}}
                    @if($now1->date == "2024-10-03")
                        <tr>
                            <td class= "border w-96 rounded-md text-xl font-sans font-normal border-blue-200">
                                {{ $now1->time }}
                            </td>
    
                                {{-- {{ $now1->discipline }}
                                {{ $now1->teacher }}
                                {{ $now1->lesson_place }} --}}
    
                        </tr>
                        <tr>
    
                        </tr>
                         
                        @else
                            nope
                        
                     @endif
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- {{dd($data)}} --}}
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
