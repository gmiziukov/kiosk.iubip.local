<x-guest-layout>
    <x-slot name="title">
        {{ __('Расписание занятий') }}
    </x-slot>

    @livewire('class-schedule', ['SoT' => $SoT])
</x-guest-layout>