<?php

namespace App\Livewire\DrivingSchool;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.driving-school.dashboard');
    }
}
