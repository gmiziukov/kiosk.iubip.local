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
    public $now = "к1и1(11)";

    public $confirmingUserDeletion = False;

    public function week($group){
        $new_a = new ClassScheduleController();
        $this->now = $new_a->add_day($group);
        return $this->now;

    }

    public function datatable($data_now, $group_now){
        $datatable = new ClassScheduleController();
        $this->data = $datatable->data($data_now, $group_now);
        return $this->data;
    }
    public function search(){
        $this->week($this->group);
        // $this->datatable($this->currentDate, $this->group);
    }

    public function mount()  {
        $this->week($this->group);
        
        $this->currentDate = Carbon::now()->format('Y-m-d');
        // $this->datatable($data_now = $this->currentDate, $group_now = $this->group);

    }

    public function render()
    {
        
        return view('livewire.class-schedule');
    }
}
