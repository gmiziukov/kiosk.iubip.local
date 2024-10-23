<?php
// блок рассписания занятий
namespace App\Livewire;

use Livewire\Component;
use App\Livewire\SelectStudentOrTeacher;
use App\Http\Controllers;
use App\Http\Controllers\ClassScheduleController;
use App\resources\views;
use Carbon\Carbon;

class ClassSchedule extends Component
{

    public $data;
    public $currentDate = '';
    public $group =  "";
    public $now = "";
    public $now_date1;
    public $weekStartDate = NULL;
    public $weekendDate = NULL;
    public $confirmingUserDeletion = False;
    public $time_var = ["08:20-09:50", "10:00-11:30", "11:40-13:10", "13:30-15:00", "15:10-16:40", "17:00-18:30", "18:40-20:10", "20:20-21:50"];
    public $SoT = 0;
    public $now_date = null;

    public function week($date, $group)
    {
        $new_a = new ClassScheduleController();
        if ($this->SoT == "Student") {
            // dd($this->now_date);
            $this->now = $new_a->add_day_student($date, $group);
            // dd($this->now);
            return $this->now;
        } else {
            $this->now = $new_a->add_day_teacher($date, $group);
            return $this->now;
        }
    }

    public function add_week()
    {
        $this->now_date = Carbon::parse($this->now_date)->addDay(-7);
        $this->weekStartDate = $this->now_date->startOfWeek()->format("Y-m-d");
        $this->weekendDate = $this->now_date->endOfWeek()->format("Y-m-d");
        $this->now_date1 = Carbon::parse($this->weekStartDate);
        $this->now_date1 = $this->weekStartDate;
        return $this->now_date;
    }

    public function back_week()
    {
        $this->now_date = Carbon::parse($this->now_date)->addDay(7);
        $this->weekStartDate = $this->now_date->startOfWeek()->format("Y-m-d");
        $this->weekendDate = $this->now_date->endOfWeek()->format("Y-m-d");
        $this->now_date1 = Carbon::parse($this->weekStartDate);
        $this->now_date1 = $this->weekStartDate;
        return $this->now_date;
    }

    public function datatable($data_now, $group_now)
    {
        $datatable = new ClassScheduleController();
        $this->data = $datatable->data($data_now, $group_now);
        return $this->data;
    }

    public function search()
    {
        $data  =$this->week($this->now_date, $this->group);
        if (count($data) == 0) {
            session()->flash('error', 'Пожалуйста, проверьте введенные вами данные или выбранную неделю');
        }
        return $data;
        // $this->datatable($this->currentDate, $this->group);
    }
    
    public function mount($SoT)
    {
        $this->now_date = Carbon::now();
        $this->weekStartDate = $this->now_date->startOfWeek()->format("Y-m-d");
        $this->weekendDate = $this->now_date->endOfWeek()->format("Y-m-d");
        $this->SoT  = $SoT;
        // $this->weekStartDate = '2024-09-30';
        // $this->weekendDate = '2024-10-05';
        $this->now_date1 = Carbon::parse($this->weekStartDate);
        $this->now_date1 = $this->weekStartDate;
        // $this->week($this->group);

        $this->currentDate = Carbon::now()->format('Y-m-d');

        // $this->datatable($data_now = $this->currentDate, $group_now = $this->group);

    }


    public function render()
    {

        return view('livewire.class-schedule');
    }
    public function redirectBack()
    {
        redirect()->route('SelectStudentOrTeacher');
    }

    public function redirectToHome()
    {
        redirect()->route('index');
    }
}
