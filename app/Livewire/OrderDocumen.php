<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\OrderDocumentController;

class OrderDocumen extends Component
{
    public $type_document = 0;
    public $name = "";

    // public function oo(){
    //     $this->request($type_documen, $name);
    // }
    public function request(){
        if($this->type_document != 0){
            $time_var = new OrderDocumentController;
            return $time_var->add_order($this->type_document, $this->name);
        }
        else{
            return 0;
        }

    }
    public function mount(){
        // $this->type_document
        return 0;
    }
    public function render()
    {
        return view('livewire.order-documen');
    }
}
