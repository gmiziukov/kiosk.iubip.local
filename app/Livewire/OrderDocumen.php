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

    public function render()
    {
        $academyController = new AcademyController();

        return view('livewire.order-documen', [
            'academies' => $academyController->a, // Assuming 'a' is a property in AcademyController
            'specializations' => $academyController->b
        ]);
    }

    public function setAcademyKey($key)
    {
        $this->selectAcademyKey = $key;
        return redirect()->route('order.document.search', ['key'=>$this->selectAcademyKey]);
    }

    // public function oo(){
    //     $this->request($type_documen, $name);
    // }
    public function request()
    {
        if ($this->type_document != 0) {
            $time_var = new OrderDocumentController;

            return $time_var->add_order($this->type_document, $this->name);
        } else {
            return 0;
        }
    }
}
