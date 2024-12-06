<x-app-layout>
    <x-slot name="title">
        {{ __('Навигационное меню') }}
    </x-slot>

    @include('layouts.nav-menu')
</x-app-layout>