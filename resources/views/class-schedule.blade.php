<x-main-layout>
    <x-slot name="backButton">
        <div class="mt-20 px-4">
            <a href="/">
                <i class="fa-solid fa-chevron-left fa-2xl" style="color: #c4cacc;"></i></a>
        </div>
    </x-slot>
    <x-slot name="head">
        Расписаниe занятий
    </x-slot>
    
    @livewire('schedule', ['SoT' => $SoT])
</x-main-layout>