<?php

namespace App\Livewire;

use App\Http\Controllers\AcademicRetakeScheduleController;
use Livewire\Component;

class AcademicRetakeScheduleList extends Component
{
    public $search = '';
    public $data = [];

    public function render()
    {
        if($this->search == '') {
            $academicRetakeScheduleController = new AcademicRetakeScheduleController();
            $this->data = $academicRetakeScheduleController->getAcademicRetakeSchedule();
        }
        
        return view('livewire.academic-retake-schedule-list');
    }

    public function redirectBack()
    {
        redirect()->route('index');
    }

    public function redirectToHome()
    {
        redirect()->route('index');
    }

    public function searchAcademicRetakeSchedule()
    {
        if (!empty($this->search)) {
            $academicRetakeScheduleController = new AcademicRetakeScheduleController();
            $this->data = $academicRetakeScheduleController->getAcademicRetakeSchedule($this->search);

            if (is_null($this->data) || count($this->data) == 0) {
                session()->flash('info', 'Для указанной фамилии преподавателя график пересдач академических задолженностей отсутствует.');
            }
            
        } else {
            session()->flash('error', 'Поле для поиска должно быть заполнено!');
        }
    }
}
