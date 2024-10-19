<?php

namespace App\Livewire;

use App\Http\Controllers\StudentGradesController;
use Livewire\Component;

class StudentGrades extends Component
{
    public $data = null;
    public function mount()
    {
        $studentGradesController = new StudentGradesController();
        $this->data = $studentGradesController->main();
        // dd ($this->data);
    }

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
}
