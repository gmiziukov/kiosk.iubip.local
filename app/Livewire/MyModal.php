<?php

namespace App\Livewire;

use Livewire\Component;

class MyModal extends Component
{
    public $inputData;
    public function render()
    {
        return view('livewire.my-modal');
    }
}
