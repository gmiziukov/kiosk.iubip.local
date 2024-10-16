<?php

namespace App\Livewire;

use App\Models\RetakeSchedule as ModelsRetakeSchedule;
use Livewire\Component;


class RetakeSchedule extends Component
{
    public function render()
    {
        $data = ModelsRetakeSchedule::get();
        return view('livewire.retake-schedule', ['data' => $data]);
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
