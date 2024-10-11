<x-main-layout>
    <x-slot name="logotip">

        <img class = "w-32" src="{{ asset('img/logo_dark.png') }}">
        <img class = "w-48" src="https://www.centrinvest.ru/_ipx/_/logo.svg">

    </x-slot>
    <x-slot name="head">
        расписаниe занятий
    </x-slot>
    @livewire('class-schedule', ['SoT' => $SoT])
    @livewire('my-modal')
</x-main-layout> 