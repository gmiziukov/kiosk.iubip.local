<?php

namespace App\Livewire;

use Livewire\Component;

class MyModal extends Component
{
    public $inputLogin;
    public $inputPassword;
    public function render()
    {
        return view('livewire.my-modal');
    }
}
