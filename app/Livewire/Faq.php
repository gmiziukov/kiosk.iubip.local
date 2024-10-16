<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\FaqController;

class Faq extends Component
{
    public $data = Null;
    public $val = Null;
    public function mount()
    {
        $a = new FaqController();
        $this->data = $a->data();
        // dd($this->data);
    }
    public function vie($val1)
    {

        // dd($val1);
        return redirect()->route('faq.item', ['val' => $val1]);
    }
    public function render()
    {
        return view('livewire.faq');
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
