<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function signup()
    {
        return view('auth.signup');
    }

    public function signup_post()
    {
        $validated = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => Password::default(),
            'selected_tab' => 'required:integer',
            'driving_school_name' => 'required_if:selected_tab,1|string',
        ]);


        $user = User::create(
            Arr::except($validated, ['selected_tab', 'driving_school_name'])
        );
        $team = Team::create([
            'name' => $validated['driving_school_name']
        ]);
        $user->teams()->attach($team->id, [
            'role_id' => Role::where('name', 'owner')->first()->id,
        ]);

        Auth::login($user);
        return redirect('/login')->with('success', 'Account created successfully. You can now log in.');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_post()
    {
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        request()->session()->regenerate();

        $user = Auth::user();

        return redirect()->route('dashboard');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully.');
    }
}
