<?php

namespace App\Livewire;

use App\Http\Controllers\AcademyController;
use Livewire\Component;

use App\Http\Controllers\OrderDocumentController;

class OrderDocumen extends Component
{
    public $type_document = 0;
    public $name = "";

    public $get_name;


    
    public function request1(){
        $time_var = new OrderDocumentController;
        $this->get_name = $time_var->add_user($this->name);
        return $this->get_name;
        
    }
    public function request()
    {
        if ($this->type_document != 0) {
            $time_var = new OrderDocumentController;
            $this->request1();
            return $time_var->add_order($this->type_document, $this->name);
        } else {
            return 0;
        }
    }
    public function mount()
    {
        // $this->type_document
        return 0;
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
