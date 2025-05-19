<?php

namespace App\Livewire\DrivingSchool;

use Livewire\Component;

class Instructors extends Component
{
    public $instructors;

    public function mount()
    {
        $this->instructors = auth()->user()->teams()->first()->instructors()->get();
    }

    public function render()
    {
        return view('livewire.driving-school.instructors');
    }
}
