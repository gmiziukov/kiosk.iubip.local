<?php

namespace App\Livewire;

use App\Http\Controllers\StudentGradesController;
use Livewire\Component;

class StudentGrades extends Component
{
    public $search = '';
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
        $studentGradesController = new StudentGradesController();
        $this->data = $studentGradesController->getStudentGrades($this->search);

        if (count($this->data) == 0) {
            session()->flash('error', 'Пожалуйста, проверьте введенные вами данные');
        }
    }

    
}
