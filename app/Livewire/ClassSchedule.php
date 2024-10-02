<?php
// блок рассписания занятий
namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers;
use App\Http\Controllers\ClassScheduleController;
use Carbon\Carbon;
class ClassSchedule extends Component
{

    public $data ;
    public $currentDate = '';
    public $group = NULL;

    public function datatable($data_now, $group_now){
        $datatable = new ClassScheduleController();
        $this->data = $datatable->data($data_now, $group_now);
        // dd($this->data);
    }
    public function oo(){
        $this->datatable($this->currentDate, $this->group);
    }

    public function mount()  {
        $this->currentDate = Carbon::now()->format('Y-m-d');
        $this->datatable($data_now = $this->currentDate, $group_now = $this->group);

    }

    public function render()
    {
        
        return view('livewire.class-schedule');
    }
}
