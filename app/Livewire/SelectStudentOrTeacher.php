<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\ClassSchedule;
use App\Http\Controllers\ClassScheduleController;
class SelectStudentOrTeacher extends Component
{


    public $SoT = 0;
    public function student (){
        return $this->SoT;
    }
    public function teacher(){
        $this->SoT = 1;
        // dd($this->SoT);
        return $this->SoT;
    }
    public function render()
    {
        // $this->SoT;
        return view('livewire.select-student-or-teacher');
    }
}
