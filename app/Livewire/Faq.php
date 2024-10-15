<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\FaqController;
class Faq extends Component
{
    public $data = Null;    
    public $val = Null;
    public function mount(){
        $a = new FaqController();
        $this->data = $a->data();
        // dd($this->data);
    }
    public function vie(){
        dd($this->val);
        return redirect()->route('faq1', ['val' => $this->val]);
    }
    public function render()
    {
        return view('livewire.faq');
    }
}
