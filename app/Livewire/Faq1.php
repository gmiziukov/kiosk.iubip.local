<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\FaqController;

class Faq1 extends Component
{
    public $data;
    public function mount($val)
    {
        $a = new FaqController();
        $this->data = $a->data_now($val);
    }
    public function render()
    {

        return view('livewire.faq1');
    }
    public function redirectBack()
    {
        redirect()->route('faq');
    }

    public function redirectToHome()
    {
        redirect()->route('index');
    }
}
