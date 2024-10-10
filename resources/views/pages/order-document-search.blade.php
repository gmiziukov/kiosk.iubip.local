<x-main-layout>
    <x-slot name="head">
        Заказ справки
    </x-slot>
    <x-slot name="backButton">
        <div class="mt-60 px-4">
            <a href="/">
                <i class="fa-solid fa-chevron-left fa-2xl" style="color: #c4cacc;"></i></a>
        </div>
    </x-slot>
    @livewire('order-document-search', ['key' => $key])
</x-main-layout>