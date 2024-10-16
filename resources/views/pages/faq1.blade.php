<x-main-layout>
    <x-slot name="head">
        {{ __('Частые вопросы') }}
    </x-slot>

    @livewire('faq1', ['val' => $val])
</x-main-layout>