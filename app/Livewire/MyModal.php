<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\OrderDocumen;
use App\Http\Controllers\OrderDocumentController;

class MyModal extends Component
{
    public $inputLogin= "";
    public $inputPassword;

    public function request1(){
        $a = new OrderDocumentController();
        // $a = $a->val1();
        dd($a);
        return $inputLogin = $a;
    }
    // public function request(){
    //     $a = new OrderDocumentController();
    //     $inputLogin = $a->request();
    //     return $a->request();
    // }
    public function render()
    {
        return view('livewire.my-modal');
    }
}
