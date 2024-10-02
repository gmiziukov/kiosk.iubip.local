<?php
// блок рассписания занятий
namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers;
use App\Http\Controllers\ClassScheduleController;
class ClassSchedule extends Component
{

    public $data ;
    public function datatable(){
        $datatable = new ClassScheduleController();
        $this->data = $datatable->data();
        // dd($this->data);
    }
    public function render()
    {
        $this->datatable();
        return view('livewire.class-schedule');
    }
}
