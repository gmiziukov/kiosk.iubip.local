<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\RetakeScheduleController;

class RetakeSchedule extends Component
{
    public $data = Null;
    public $get_name = Null;

    public function mount()
    {
        $data = new RetakeScheduleController();
        return $this->data = $data->main_data();
    }

    public function search()
    {
        $data = new RetakeScheduleController();
        return $this->data = $data->search($this->get_name);
    }

    public function render()
    {
        return view('livewire.retake-schedule');
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
