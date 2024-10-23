<?php

namespace App\Livewire;

use Livewire\Component;

class AboutUniversity extends Component
{
    public function render()
    {
        return view('livewire.about-university');
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
