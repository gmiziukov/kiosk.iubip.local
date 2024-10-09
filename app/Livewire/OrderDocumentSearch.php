<?php

namespace App\Livewire;

use Livewire\Component;

class OrderDocumentSearch extends Component
{
    public $key = 0;
    public function render()
    {
        return view('livewire.order-document-search');
    }
    public function mount($key)
    {

    }
}
