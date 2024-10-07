<?php

namespace App\Livewire;

use App\Models\RetakeSchedule as ModelsRetakeSchedule;
use Livewire\Component;


class RetakeSchedule extends Component
{
    public function render()
    {
        \Carbon\Carbon::setLocale('ru');
        $data = ModelsRetakeSchedule::get();    
        return view('livewire.retake-schedule', ['data' => $data]);
    }
}
