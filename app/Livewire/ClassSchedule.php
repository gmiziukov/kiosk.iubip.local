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
    public $now = NULL;

    public $confirmingUserDeletion = False;

    public function week($have_date){
        $this->now = Carbon::now();
        $weekStartDate = $this->now->startOfWeek()->format("Y-m-d");
        $weekendDate = $this->now->endOfWeek()->format("Y-m-d");

        return $this-> now;
    }

    public function datatable($data_now, $group_now){
        $datatable = new ClassScheduleController();
        $this->data = $datatable->data($data_now, $group_now);
        // dd($this->data);
    }
    public function search(){
        $this->datatable($this->currentDate, $this->group);
    }

    public function mount()  {
        $this->week('2024-10-03');
        $this->currentDate = Carbon::now()->format('Y-m-d');
        $this->datatable($data_now = $this->currentDate, $group_now = $this->group);

    }

    public function render()
    {
        
        return view('livewire.class-schedule');
    }
}
