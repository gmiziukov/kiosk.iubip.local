<?php

namespace App\Livewire;
use App\Http\Controllers\StudentGradesController;
use Livewire\Component;

class StudentGrades extends Component
{
    public $data = null;
        public function mount(){
        $this->data = new StudentGradesController();
        // dd( $this->data->main());
        return $this->data->main();
    }
    public function render()
    {
        return view('livewire.student_grades');
    }
}
