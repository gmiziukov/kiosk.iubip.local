<?php

namespace App\Livewire;

use Livewire\Component;

class Ejournal extends Component
{
    public function render()
    {
        return view('livewire.ejournal');
    }
    public function redirectBack()
    {
        redirect()->route('index');
    }

    public function redirectToHome()
    {
        redirect()->route('index');
    }
}
