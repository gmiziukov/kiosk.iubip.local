<?php

namespace App\Livewire;

use App\Http\Controllers\AcademyController;
use Livewire\Component;
use App\Http\Controllers\OrderDocumentController;

class OrderDocumen extends Component
{
    public $type_document = 0;
    public $name = "";
    public $selectAcademyKey = 0;

    public function mount()
    {
        // $this->type_document
        return 0;
    }
    
    public function request()
    {
        if ($this->type_document != 0) {
            $time_var = new OrderDocumentController;

            return $time_var->add_order($this->type_document, $this->name);
        } else {
            return 0;
        }
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
