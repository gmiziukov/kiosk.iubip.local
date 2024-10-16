<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\ClassSchedule;
use App\Http\Controllers\ClassScheduleController;
class SelectStudentOrTeacher extends Component
{


    public $SoT = "Student";
    public function student (){
        return redirect()->route('schedule', ['SoT'=>$this->SoT]);
    }
    public function teacher(){
        $this->SoT = "Teacher";
        // dd($this->SoT);
        return redirect()->route('schedule',['SoT'=>$this->SoT]);
    }
    public function render()
    {
        // $this->SoT;
        return view('livewire.select-student-or-teacher');
    }

    public function redirectBack() {
        redirect()->route('index');
    }

    public function redirectToHome() {
        redirect()->route('index');
    }
}
