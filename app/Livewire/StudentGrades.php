<?php

namespace App\Livewire;

use App\Http\Controllers\StudentGradesController;
use Livewire\Component;

class StudentGrades extends Component
{
    public string $search = '';
    public string $fio = '';
    public $data = [];

    public function render()
    {
        return view('livewire.student-grades');
    }

    public function redirectBack()
    {
        redirect()->route('index');
    }

    public function redirectToHome()
    {
        redirect()->route('index');
    }

    public function getStudentGrades()
    {
        if (!empty($this->search)) {
            $studentGradesController = new StudentGradesController();
            $grades = $studentGradesController->getStudentGrades($this->search);

            if (count($grades) == 0) {
                session()->flash('info', 'Для указанного номера зачетной книжки результаты промежуточной аттестации отсутствует.');
            }else {
                $this->fio = $grades['fio'];
                $this->data = $grades['data'];
            }
            
        } else {
            session()->flash('error', 'Поле для поиска должно быть заполнено!');
        }
    }
}
