<?php

namespace App\Livewire;

use Livewire\Component;

class GradeUserRoleSelection extends Component
{
    public function render()
    {
        return view('livewire.grade-user-role-selection');
    }

    public function redirectBack() {
        redirect()->route('index');
    }

    public function redirectToHome() {
        redirect()->route('index');
    }
}
