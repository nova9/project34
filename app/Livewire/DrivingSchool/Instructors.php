<?php

namespace App\Livewire\DrivingSchool;

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Instructors extends Component
{
    public $instructors;

    #[Validate('required|string')]
    public $name;

    #[Validate('required|email|unique:users,email')]
    public $email;
    #[Validate('required|regex:/^0[0-9]{9}$/')]
    public $phone;

    #[Validate('required|min:8')]
    public $password;


    #[Session('selectedTeamId')]
    public $selectedTeamId;

    public function mount()
    {
        $this->loadInstructors();
    }

    public function create()
    {
        $this->resetInputFields();
    }

    public function store()
    {
        $validated = $this->validate();

        $user = User::create(Arr::except($validated, ['phone']));
        $user->userAttributes()->create([
            'key' => 'phone',
            'value' => $this->phone,
        ]);
        $team = Team::find($this->selectedTeamId);
        $user->teams()->attach($team->id, [
            'role_id' => Role::where('name', 'instructor')->first()->id,
        ]);
        $this->loadInstructors();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->userAttributes()->where('key', 'phone')->first()->value ?? '';
    }

    public function update($id)
    {
        $validated = $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|regex:/^0[0-9]{9}$/',
        ]);

        $user = User::findOrFail($id);
        $user->update(Arr::except($validated, ['phone']));
        $user->userAttributes()->updateOrCreate(
            ['key' => 'phone'],
            ['value' => $this->phone]
        );

        $this->loadInstructors();
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->teams()->detach($this->selectedTeamId);
        $user->delete();
        $this->loadInstructors();
    }

    public function render()
    {
        return view('livewire.driving-school.instructors');
    }

    private function loadInstructors(): void
    {
        $team = Team::findOrFail($this->selectedTeamId);
        $this->instructors = $team->instructors ?? [];
    }

    private function resetInputFields(): void
    {
        $this->reset(['name', 'email', 'phone', 'password']);
    }
}
