<?php

namespace App\Livewire;

use Livewire\Component;

class AboutUniversity extends Component
{
    public function render()
    {
        return view('livewire.about-university');
    }

    public function redirectToHome()
    {
        return redirect()->route('index');
    }
}
