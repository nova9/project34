<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Session;
use Livewire\Component;

class TeamSelect extends Component
{
    public $teams;

    #[Session(key: 'selectedTeamId')]
    public $selectedTeamId = '';

    public function mount()
    {
        $this->teams = auth()->user()->teams;
        $this->selectedTeamId = $this->teams->first()->id ?? null;
    }

    #[Computed]
    public function selectedTeamName()
    {
        return $this->teams->firstWhere('id', $this->selectedTeamId)->name ?? '';
    }

    public function render()
    {
        return view('livewire.team-select');
    }
}
