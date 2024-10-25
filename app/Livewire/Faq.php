<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\FaqController;

class Faq extends Component
{
    public $data = Null;
    public $order = Null;
    public $val = Null;

    public $search_var = Null;

    public function search(){
        $a = new FaqController();
        return $this->data = $a->search($this->search_var);
        }
    public function mount()
    {
        $a = new FaqController();
        $this->data = $a->data();
        // dd($this->data);
    }
    public function main()
    {
        $a = new FaqController();
        $this->data = $a->data();
        // dd($this->data);
    }   

    public function ORD($b)
    {
        $a = new FaqController();
        $this->data = $a->order($b);
        if (count($this->data) == 0) {
            session()->flash('error', 'Вопросов с данной категорией не найдено ');
        }
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