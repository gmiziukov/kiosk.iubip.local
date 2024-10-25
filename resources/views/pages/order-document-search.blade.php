<x-main-layout>
    <x-slot name="head">
        Заказ справки
    </x-slot>
    @livewire("my-modal")
    @livewire('order-document-search', ['key' => $key])
</x-main-layout>