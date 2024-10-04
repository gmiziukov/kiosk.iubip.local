<x-main-layout>
    <x-slot name="logotip">
        <img class = "w-32" src="{{ asset('img/logo_dark.png') }}">
        <img class = "w-48" src="https://www.centrinvest.ru/_ipx/_/logo.svg">
    </x-slot>
    <x-slot name="head">
        заказать справку
    </x-slot>
    @livewire('order-documen')
</x-main-layout> 